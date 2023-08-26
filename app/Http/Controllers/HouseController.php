<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function index()
    {
        $houses = House::all();
        return view("house.index", compact('houses'));
    }

    public function show($id)
    {
        $house = House::find($id);
        return view("house.show", compact("house"));
    }

    public function create()
    {
        $houses = House::all();
        return view("house.admin", compact("houses"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "house_name" => 'required',
            "house_price" => 'required',
            "house_description" => "required",
            "house_room_count" => "required",
            "house_garage_count" => "required",
            "house_region" => "required",
            "house_postal_code" => "required",
            "house_exact_location" => "required",
            "house_main_image" => "required",
            "house_images" => "required",
            "house_id" => "required",
            "house_type" => "required",
            "house_status" => "required"
        ]);
        $house_main_image = "";
        if ($request->hasFile('house_main_image')) {
            $name = time() . random_int(1, 100) . '.' . $request->file('house_main_image')->getClientOriginalExtension();
            $request->file('house_main_image')->storeAs('public/images/houses', $name);
            $house_main_image = $name;
        } else {
            $house_main_image = "no image";
        }
        $house_images = [];
        if ($request->hasFile('house_images')) {
            foreach ($request->file('house_images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/houses', $name);
                $house_images[] = $name;
            }
        }
        $house = new House([
            "house_name" => $request->get("house_name"),
            "house_price" => $request->get("house_price"),
            "house_description" => $request->get("house_description"),
            "house_room_count" => $request->get("house_room_count"),
            "house_garage_count" => $request->get("house_garage_count"),
            "house_region" => $request->get("house_region"),
            "house_postal_code" => $request->get("house_postal_code"),
            "house_exact_location" => $request->get("house_exact_location"),
            "house_main_image" => $request->get("house_main_image"),
            "house_images" => $request->get("house_images"),
            "house_id" => $request->get("house_id"),
            "house_type" => $request->get("house_type"),
            "house_status" => $request->get("house_status")
        ]);
        $house->save();
        return redirect("houses/admin")->with('msg', "House saved");
    }

    public function destroy($id)
    {
        $house = House::find($id);
        $house->delete();
        return view("house.admin")->with("msg", "delete successfully");
    }
}
