<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex flex-row overflow-hidden w-full h-screen relative">
        <div class="flex flex-col bg-blue-600 gap-5 w-1/6 space-between pt-5 pb-5 h-full">
            <button class="w-full justify-start text-start pl-10 hover:bg-blue-700 hover:cursor-pointer"><a
                    href="{{ route('index') }}" class="text-black text-2xl font-medium">
                    < </a></button>
            <button class="w-full justify-start text-start pl-10 hover:bg-blue-700 hover:cursor-pointer"><a href=""
                    class="text-black text-2xl font-medium">cars</a></button>
            <button class="w-full justify-start text-start pl-10 hover:bg-blue-700 hover:cursor-pointer"><a href=""
                    class="text-black text-2xl font-medium">users</a></button>
            <button class="w-full justify-start text-start pl-10 hover:bg-blue-700 hover:cursor-pointer"><a href=""
                    class="text-black text-2xl font-medium">orders</a></button>
        </div>
        <div class="flex flex-col w-full h-full bg-gray-100">
            <div class="flex flex-row justify-between items-center bg-white p-5">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
            </div>
            <div class="overflow-y-scroll h-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>