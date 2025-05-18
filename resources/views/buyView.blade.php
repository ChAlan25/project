<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buy Car</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white min-h-screen ">

    <nav class="bg-black border-b border-gray-300  text-white">
        <ul class="flex justify-end gap-4 items-center list-none text-white">
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white min-h-14 h-22 p-1 flex items-center justify-center">
                <a href="/">Home</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white min-h-14 h-22 p-1 flex items-center justify-center">
                <a href="{{ route('products') }}">Products</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white min-h-14 h-22 p-1 flex items-center justify-center">
                <a href="/about">About Us</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white min-h-14 h-22 p-1 flex items-center justify-center">
                <a href="/services">Services</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white min-h-14 h-22 p-1 flex items-center justify-center">
                <a href="/contact">Contact</a>
            </li>

            <div class="flex justify-end p-4">
                @auth
                    @if (Auth::user()->is_admin)
                        <li
                            class="text-2xl hover:cursor-pointer hover:underline hover:text-white h-14 p-1 flex items-center justify-center">
                            <a href="/dashboard/cars">Dashboard</a>
                        </li>
                    @endif

                    <form action="{{ route('logout.post') }}" method="post" class="flex items-center p-0 m-0 ml-2.5 ">
                        @csrf
                        <li><button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">Logout</button>
                        </li>
                    </form>

                @else
                    <li>
                        <a href="/login?condition=login"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Login</a>
                    </li>
                    <li>
                        <a href="/login?condition=register" class="text-white font-bold py-2 px-4 rounded ml-4">Register</a>
                    </li>
                @endauth
            </div>
        </ul>
    </nav>

    <div class="bg-white text-black w-screen min-h-full rounded-xl shadow-lg flex flex-row gap-8">
        <!-- Left: Car Image -->
        <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('storage/' . $car->image_path) }}" alt="{{ $car->name }}"
                class="rounded-xl max-h-[450px] object-cover w-full h-full">
        </div>

        <!-- Right: Form -->
        <div class="w-1/2 p-8">
            <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Confirm Your Purchase</h1>

            <form action="{{ route('cars.buy', $car->id) }}" method="POST" class="space-y-5">
                @csrf

                <!-- Order Date -->
                <div class="mb-4">
                    <label for="order_date" class="block mb-1 text-sm font-semibold text-black m-4">Order Date</label>
                    <input type="date" name="order_date" value="{{ date('Y-m-d') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label for="status" class="block mb-1 text-sm font-semibold text-black m-4">Status</label>
                    <input type="text" name="status" value="pending" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Total Price -->
                <div class="mb-4">
                    <label class="block mb-1 text-sm font-semibold text-black m-4">Total Price</label>
                    <p class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">{{ $car->price }}</p>
                    <input type="hidden" name="total_price" value="{{ $car->price }}">
                </div>

                <!-- Shipping Address -->
                <div class="mb-4">
                    <label for="shipping_address" class="block mb-1 text-sm font-semibold text-black m-4">Shipping
                        Address</label>
                    <input type="text" name="shipping_address"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Payment Method -->
                <div class="mb-4">
                    <label for="payment_method" class="block mb-1 text-sm font-semibold text-black m-4">Payment
                        Method</label>
                    <select name="payment_method"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="cash_on_delivery">Cash on Delivery</option>
                    </select>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition duration-200 hover:cursor-pointer">
                    Place Order
                </button>
            </form>
        </div>
    </div>

</body>

</html>