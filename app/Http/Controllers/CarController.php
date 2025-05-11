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
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        // Fetch a single car by its ID
        $car = Car::findOrFail($id);

        // Return the view with the car data
        return view('cars.show', compact('car'));
    }
}
