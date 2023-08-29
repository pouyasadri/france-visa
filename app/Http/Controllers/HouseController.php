<?php

namespace App\Http\Controllers;

use App\Models\House;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HouseController extends Controller
{
    /**
     * Display a listing of houses.
     *
     * @return View
     */
    public function index(): View
    {
        $houses = House::all();
        return view("house.index", compact('houses'));
    }

    /**
     * Display the specified house.
     *
     * @param House $house
     * @return View
     */
    public function show(House $house): View
    {
        $nextHouse = House::where('id', '>', $house->id)->orderBy('id', 'asc')->first();
        $prevHouse = House::where('id', '<', $house->id)->orderBy('id', 'desc')->first();
        return view("house.show", compact("house", "nextHouse", "prevHouse"));
    }

    /**
     * Display the house creation form.
     *
     * @return View
     */
    public function create(): View
    {
        $houses = House::all();
        return view("house.admin", compact("houses"));
    }

    /**
     * Store a newly created house in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validatedData = $request->validate([
                // Add your validation rules for house fields here
                "house_name" => 'required',
                "house_price" => 'required',
                "house_description" => "required",
                "house_room_count" => "required",
                "house_garage_count" => "required",
                "house_region" => "required",
                "house_postal_code" => "required",
                "house_exact_location" => "required",
                "house_main_image" => "required|image",
                "house_images.*" => "required|image",
                "house_id" => "required",
                "house_type" => "required",
                "house_status" => "required"
            ]);

            // Upload and store main image
            $house_main_image = $request->file('house_main_image')->store('public/images/houses');
            $house_main_image_name = basename($house_main_image); // Get the name of the main image

            $house_images = [];

            // Upload and store additional images
            foreach ($request->file('house_images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/houses', $name);
                $house_images[] = $name;
            }

            // Create a new house with validated data
            House::create(array_merge($validatedData, [
                "house_main_image" => $house_main_image_name, // Store only the main image name
                "house_images" => $house_images
            ]));

            return redirect("houses/admin")->with('success', "House saved");
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving the house.');
        }
    }

    /**
     * Remove the specified house from storage.
     *
     * @param House $house
     * @return RedirectResponse
     */
    public function destroy(House $house): RedirectResponse
    {
        try {
            // Delete associated images from storage
            Storage::delete($house->house_main_image);
            foreach ($house->house_images as $image) {
                Storage::delete('public/images/houses/' . $image);
            }

            $house->delete();

            return redirect()->route('houses.admin')->with("success", "House deleted successfully");
        } catch (Exception $e) {
            return redirect()->route('houses.admin')->with('error', 'An error occurred while deleting the house.');
        }
    }
}
