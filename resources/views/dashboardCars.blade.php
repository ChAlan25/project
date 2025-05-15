@vite('resources/css/app.css')

<x-dashboard>
    <div class="flex flex-col justify-center items-end w-full bg-gray-100">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 m-2"><a
                href="{{ route('dashboard.cars.create') }}">Add Car</a></button>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 h-10">
                    <th class="border-b-2 ">Image</th>
                    <th class="border-b-2 ">Car Name</th>
                    <th class="border-b-2 ">Description</th>
                    <th class="border-b-2 ">Price</th>
                    <th class="border-b-2" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td class="border-b-1 "><img src="{{ $car->image }}" alt="{{ $car->image_path }}" width="100"></td>
                        <td class="border-b-1  text-center">{{ $car->name }}</td>
                        <td class="border-b-1  text-center">{{ $car->description }}</td>
                        <td class="border-b-1 text-center">{{ $car->price }}DT</td>
                        <td class="border-b-1 text-center"><button
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"><a
                                    href="{{ route('dashboard.cars.edit', $car->id) }}">Edit</a></button></td>
                        <td class="border-b-1 text-center">
                            <form action="{{ route('dashboard.cars.destroy', $car->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard>