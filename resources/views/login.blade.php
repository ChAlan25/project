<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<style>
    img {
        animation: slide 30s infinite;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
            animation-delay: 60s;
        }

        25% {
            transform: translateX(-100%);
            animation-delay: 60s;
        }

        50% {
            transform: translateX(-200%);
            animation-delay: 60s;
        }

        75% {
            transform: translateX(-300%);
            animation-delay: 60s;
        }

        100% {
            transform: translateX(-400%);
        }
    }

    [name="images"] {
        transition: transform 0.5s ease-in-out;
        /* Smooth animation for transform */
    }
</style>

<script>
    let condition = @json($condition); // Pass the condition from PHP to JavaScript

    window.onload = function () {
        const imagesDiv = document.getElementsByName('images')[0];
        if (condition == "login") {
            imagesDiv.classList.add('translate-x-1/2');
        } else {
            imagesDiv.classList.add('-translate-x-1/2');
        }
    };

    // Function to move the images to the register section
    function moveToRegister() {
        document.getElementsByName('images')[0].style.transform = 'translateX(-100%)';
    }
    function moveToLogin() {
        document.getElementsByName('images')[0].style.transform = 'translateX(0)';
    }
</script>

<body>
    <div class="w-full h-screen flex justify-center items-center ">
        <div class="w-full h-full flex flex-row overflow-hidden ">
            <img src="{{ asset('images/audi.jpg') }}" class="min-w-dvw h-screen bg-cover" alt="">
            <img src="{{ asset('images/corvette.jpg') }}" class="min-w-dvw h-screen bg-cover" alt="">
            <img src="{{ asset('images/mustang.jpg') }}" class="min-w-dvw h-screen bg-cover" alt="">
            <img src="{{ asset('images/porsche.jpg') }}" class="min-w-dvw h-screen bg-cover" alt="">
            <img src="{{ asset('images/audi.jpg') }}" class="min-w-dvw h-screen bg-cover" alt="">
            <div class="w-screen h-screen bg-black opacity-50 absolute right-0 top-0"></div>
        </div>
        <div class="bg-white  absolute rounded shadow-md flex flex-row justify-center items-center">
            <div class="w-96 bg-white p-8 rounded ">
                <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password:</label>
                        <input type="password" name="password" id="password" required
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded">Login</button>
                </form>
                <p class="mt-4 text-center">Don't have an account? <button onclick="moveToRegister()"
                        class="text-red-500 hover:underline hover:cursor-pointer">Register</button></p>
            </div>
            <div class="w-96 bg-white p-8 rounded ">
                <h2 class="text-2xl font-bold mb-6 text-center">register</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password:</label>
                        <input type="password" name="password" id="password" required
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded">Register</button>
                </form>
                <p class="mt-4 text-center hover:cursor-pointer">Already have an account? <button
                        onclick="moveToLogin()"
                        class="text-red-500 hover:underline hover:cursor-pointer">Login</button></p>
            </div>
            <div class="absolute flex flex-row overflow-hidden w-1/2 h-full" name="images">
                <img src="{{ asset('images/login/1.jpg') }}" class="min-w-full bg-cover" alt="">
                <img src="{{ asset('images/login/2.jpg') }}" class="min-w-full bg-cover" alt="">
                <img src="{{ asset('images/login/3.jpg') }}" class="min-w-full bg-cover" alt="">
                <img src="{{ asset('images/login/4.jpg') }}" class="min-w-full bg-cover" alt="">
                <img src="{{ asset('images/login/1.jpg') }}" class="min-w-full bg-cover" alt="">
            </div>
        </div>
    </div>
</body>

</html>