<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <button class="bg-gray-500 text-black px-4 py-2 rounded hover:bg-gray-700 hover:cursor-pointer m-6"><a
            href="{{ route('dashboard.cars') }}">
            < back</a></button>
    <form action="{{ route('dashboard.cars.update', $car->id) }}" method="POST" class="flex flex-col gap-4 p-5">
        @csrf
        @method('PUT')
        <table class="border-collapse border border-gray-300 gap-4">
            <tr>
                <td>
                    <label for="name">name : </label>
                </td>
                <td>
                    <input type="text"
                        class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500"
                        name="name" value="{{ $car->name }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="brand">brand</label>
                </td>
                <td><input type="text" class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500" name="brand" value="{{ $car->brand }}"></td>
            </tr>
            <tr>
                <td>
                    <label for="model">model :</label>
                </td>
                <td>
                    <input type="text"
                        class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500"
                        name="model" value="{{ $car->model }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">year :</label>
                </td>
                <td>
                    <input type="text"
                        class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500"
                        name="year" value="{{ $car->year }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">description : </label>
                </td>
                <td>
                    <input type="textarea"
                        class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500"
                        name="description" value="{{ $car->description }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="price">price : </label>
                </td>
                <td>
                    <input type="number"
                        class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500"
                        name="price" value="{{ $car->price }}">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><button type="submit"
                        class=" bg-red-500 hover:bg-red-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>