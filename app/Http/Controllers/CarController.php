<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // Fetch all cars from the database
        $cars = Car::all();

        // Return the view with the cars data
        return view('index', compact('cars'));
    }

    public function dashboard()
    {
        // Fetch all cars from the database
        $cars = Car::all();

        // Return the view with the cars data
        return view('dashboardCars', compact('cars'));
    }

    public function show($id)
    {
        // Fetch a single car by its ID
        $car = Car::findOrFail($id);

        // Return the view with the car data
        return view('cars.show', compact('car'));
    }

    public function destroy($id)
    {
        // Find the car by ID
        $car = Car::findOrFail($id);

        // Delete the car
        $car->delete();

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard.cars')->with('success', 'Car deleted successfully!');
    }

    public function UpdateShow($id)
    {
        // Fetch a single car by its ID
        $car = Car::findOrFail($id);

        // Return the view with the car data
        return view('updatecar', compact('car'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Find the car by ID
        $car = Car::findOrFail($id);

        // Update the car details
        $car->update($request->all());

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard.cars')->with('success', 'Car updated successfully!');
    }
}
