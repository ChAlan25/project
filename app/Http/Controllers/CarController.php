<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index()
    {
        // Fetch all cars from the database
        $cars = Car::orderBy('created_at', 'desc')->get();

        // Return the view with the cars data
        return view('index', compact('cars'));
    }

    function products()
    {
        $cars = Car::paginate(10);
        return view('products', compact('cars'));
    }

    function detail($id)
    {
        $car = Car::findOrFail($id);
        return view('details', compact('car'));
    }

    public function buyView($id)
    {
        // Fetch the car by ID
        $car = Car::findOrFail($id);

        // Return the view with the car data
        return view('buyView', compact('car'));
    }

    public function buy($id, Request $request)
    {
        // Validate only the remaining fields
        $request->validate([
            'order_date' => 'required|date',
            'status' => 'required|string',
            'total_price' => 'required|numeric',
            'shipping_address' => 'nullable|string',
            'payment_method' => 'nullable|string',
        ]);

        // Create a new order with car ID and authenticated user ID
        $order = new Order();
        $order->user_id = Auth::id();     // Get the logged-in user's ID
        $order->car_id = $id;             // Car ID from the route
        $order->order_date = $request->input('order_date');
        $order->status = $request->input('status');
        $order->total_price = $request->input('total_price');
        $order->shipping_address = $request->input('shipping_address');
        $order->payment_method = $request->input('payment_method');
        $order->save();

        return redirect()->route('index')->with('success', 'Order placed successfully!');
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
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Find the car by ID
        $car = Car::findOrFail($id);

        // If an image is uploaded, handle it separately
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        // Update the car details
        $car->update($validatedData);

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard.cars')->with('success', 'Car updated successfully!');
    }

    public function create()
    {
        // Return the view for creating a new car
        return view('createcar');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'price' => 'required|numeric',
        ]);
        // Create a new car instance
        $car = new Car();
        $car->name = $request->input('name');
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->description = $request->input('description');
        $car->image_path = $request->file('image_path')->store('images', 'public');
        $car->quantity = $request->input('quantity', 0); // Default to 0 if not provided
        $car->price = $request->input('price');
        $car->save();

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard.cars')->with('success', 'Car created successfully!');
    }

    public function users()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return the view with the users data
        return view('dashboardUsers', compact('users'));
    }
    public function destroyUser($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully!');
    }

    public function orders()
    {
        // Fetch all orders from the database
        $orders = Order::with('user', 'car')->get();

        // Return the view with the orders data
        return view('dashboardOrders', compact('orders'));
    }
}
