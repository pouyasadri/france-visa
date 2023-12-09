<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRequest;
use App\Models\House;
use Illuminate\Http\Request;
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
        $maxPrice = House::max('house_price');
        $maxRoomCount = House::max("house_room_count");
        $maxGarageCount = House::max("house_garage_count");
        $regions = House::distinct('house_region')->pluck('house_region');
        return view("house.index", compact(['houses', 'maxPrice', 'maxRoomCount', 'maxGarageCount', 'regions']));
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

    public function filter(Request $request): \Illuminate\Http\JsonResponse
    {
        $query = House::query();

        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('house_price', [$request->min_price, $request->max_price]);
        }

        if ($request->filled('room_count')) {
            $query->whereIn('house_room_count', $request->room_count);
        }

        if ($request->filled('garage_count')) {
            $query->whereIn('house_garage_count', $request->garage_count);
        }

        if ($request->filled('regions')) {
            $query->whereIn('house_region', $request->regions);
        }

        $houses = $query->get();

        return response()->json($houses);
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
