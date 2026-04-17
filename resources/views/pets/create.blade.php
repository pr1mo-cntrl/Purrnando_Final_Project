<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add a New Pet</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('pets.store') }}" method="POST" class="max-w-md space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Name</label>
                        <input type="text" name="name" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Breed</label>
                        <input type="text" name="breed" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Age</label>
                        <input type="number" name="age" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">Save Pet</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>