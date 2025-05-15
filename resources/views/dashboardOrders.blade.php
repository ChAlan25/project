@vite('resources/css/app.css')

<x-dashboard>
    <div>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 h-10">
                    <th class="border-b-2 ">Name</th>
                    <th class="border-b-2 ">Car</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="border-b-1 ">{{ $order->user->name }}</td>
                        <td class="border-b-1 text-center">{{ $order->car->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard>