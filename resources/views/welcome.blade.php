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
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white h-14 p-1 flex items-center justify-center">
                <a href="/">Home</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white h-14 p-1 flex items-center justify-center">
                <a href="/products">Products</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white h-14 p-1 flex items-center justify-center">
                <a href="/about">About Us</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white h-14 p-1 flex items-center justify-center">
                <a href="/services">Services</a>
            </li>
            <li
                class="text-2xl hover:cursor-pointer hover:underline hover:bg-red-700 hover:text-white h-14 p-1 flex items-center justify-center">
                <a href="/contact">Contact</a>
            </li>

            <div class="flex justify-end p-4">
                <li>
                    <a href="/login?condition=login"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Login</a>
                </li>
                <li>
                    <a href="/login?condition=register" class="text-white font-bold py-2 px-4 rounded ml-4">Register</a>
                </li>
            </div>
        </ul>
    </nav>
    <div class="flex flex-row overflow-hidden w-full h-140 relative">

        <div>
            <img src="{{ asset('images/audi.jpg') }}" class="min-w-dvw h-140 bg-cover -z-1" alt="">
            <div class="w-screen h-140 bg-gray-500 opacity-50 absolute right-0 top-0"></div>
            <div class="h-1/2 w-1/2 absolute flex flex-col text-white bottom-0 left-0">
                <h1 class="text-5xl font-bold mb-4">Welcome to Our Car Dealership</h1>
                <p class="text-lg mb-4">Discover the best deals on luxury cars</p>
            </div>
        </div>

    </div>

    <div class="flex flex-row flex-wrap justify-center items-center w-full bg-white space-between m-5">

        <div class="h-150 w-70 bg-white rounded shadow-md border-2 border-gray-300 p-4 m-2">
            <img src="{{ asset('images/login/1.jpg') }}" class="h-1/2 w-full bg-cover" alt="">
            <h2 class="text-2xl font-bold mb-6 text-center">Luxury Cars</h2>
            <p class="text-lg mb-4">Explore our collection of luxury cars that offer unparalleled performance and style.
            </p>
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">View More</button>
        </div>

    </div>
</body>

</html>