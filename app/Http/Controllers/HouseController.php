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
        return view("house.show", compact("house"));
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
                // Validation rules for house fields
            ]);

            // Upload and store main image
            $house_main_image = $request->file('house_main_image')->store('public/images/houses');
            $house_images = [];

            // Upload and store additional images
            foreach ($request->file('house_images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/houses', $name);
                $house_images[] = $name;
            }

            // Create a new house with validated data
            House::create(array_merge($validatedData, [
                "house_main_image" => $house_main_image,
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
            $house->delete();
            Storage::delete($house->house_main_image);

            return redirect()->route('houses.admin')->with("success", "House deleted successfully");
        } catch (Exception $e) {
            return redirect()->route('houses.admin')->with('error', 'An error occurred while deleting the house.');
        }
    }
}
