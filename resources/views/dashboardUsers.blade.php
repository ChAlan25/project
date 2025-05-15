@vite('resources/css/app.css')

<x-dashboard>
    <div>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 h-10">
                    <th class="border-b-2 ">Name</th>
                    <th class="border-b-2 ">Email</th>
                    <th class="border-b-2 ">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border-b-1 ">{{ $user->name }}</td>
                        <td class="border-b-1 text-center">{{ $user->email }}</td>
                        <td class="border-b-1 text-center">
                            <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard>