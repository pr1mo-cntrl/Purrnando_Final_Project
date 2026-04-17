<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pets Looking for a Home</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <a href="{{ route('pets.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add New Pet</a>

                <table class="min-w-full text-left mt-4 border-collapse">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-4 border-b">Name</th>
                            <th class="p-4 border-b">Breed</th>
                            <th class="p-4 border-b">Age</th>
                            <th class="p-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">{{ $pet->name }}</td>
                            <td class="p-4">{{ $pet->breed }}</td>
                            <td class="p-4">{{ $pet->age }} yrs</td>
                            <td class="p-4 flex space-x-4">
                                <a href="{{ route('pets.edit', $pet->id) }}" class="text-yellow-600 font-bold hover:underline">Edit</a>
                                <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pet?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 font-bold hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>