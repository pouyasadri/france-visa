<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRequest;
use App\Models\House;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class HouseController extends Controller
{
    public function index(): View
    {
        $houses = House::all();
        return view("house.index", compact('houses'));
    }

    public function show(House $house): View
    {
        $nextHouse = House::where('id', '>', $house->id)->orderBy('id', 'asc')->first();
        $prevHouse = House::where('id', '<', $house->id)->orderBy('id', 'desc')->first();
        return view("house.show", compact("house", "nextHouse", "prevHouse"));
    }

    public function create(): View
    {
        $houses = House::all();
        return view("house.admin", compact("houses"));
    }

    public function store(StoreHouseRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        DB::transaction(function () use ($request, $validatedData) {
            $house_main_image = $request->file('house_main_image')->storeAs('public/images/houses', Str::random(40) . '.' . $request->file('house_main_image')->extension());

            $house_images = [];

            if ($request->hasFile('house_images')) {
                foreach ($request->file('house_images') as $image) {
                    if ($image->isValid()) {
                        $name = Str::random(40) . '.' . $image->extension();
                        $image->storeAs('public/images/houses', $name);
                        $house_images[] = $name;
                    }
                }
            }

            $house = new House(array_merge($validatedData, [
                "house_main_image" => $house_main_image,
                "house_status" => "available",
                "house_images" => json_encode($house_images)
            ]));
            $house->save();
        });

        return redirect("/home")->with('success', "House saved");
    }

    public function destroy(House $house): RedirectResponse
    {
        Storage::delete($house->house_main_image);
        foreach (json_decode($house->house_images) as $image) {
            Storage::delete('public/images/houses/' . $image);
        }

        $house->delete();

        return redirect("/home")->with("success", "House deleted successfully");
    }
}
