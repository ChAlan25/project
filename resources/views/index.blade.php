<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
    @vite('resources/css/app.css')
</head>

<body>
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
    <div class="flex flex-row overflow-hidden w-full h-140 relative">

        <div>
            <img src="{{ asset('images/audi.jpg') }}" class="min-w-dvw h-140 bg-cover -z-1" alt="">
            <div class="w-screen h-140 bg-gray-500 opacity-50 absolute right-0 top-0"></div>
            <div class="h-1/2 w-1/2 absolute flex flex-col text-white bottom-0 left-0">
                <h1 class="text-5xl font-bold m-4">Welcome to Our Car Dealership</h1>
                <p class="text-lg m-4">Discover the best deals on luxury cars</p>
            </div>
        </div>

    </div>

    <div class="flex flex-row flex-wrap justify-center items-center w-fit bg-white space-between m-5">
        @foreach ($cars as $car)
            <div class="flex flex-col h-100 w-70 bg-white rounded shadow-md border-2 border-gray-300 p-4 m-2">
                <img src="{{ asset('storage/' . $car->image_path) }}" class="h-1/2 w-full bg-cover" alt="">
                <h2 class="text-2xl font-bold m-6 text-center">{{ $car->name }}</h2>
                <p class="text-lg m-4">{{ $car->description }}</p>
                <button
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded justify-end bottom-0 hover:cursor-pointer"><a
                        href="{{ route('cars.details', $car->id) }}">View More</a>
                </button>
            </div>
        @endforeach
    </div>
</body>

</html>