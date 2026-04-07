@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Pets Looking for a Home</h2>
    <div class="bg-white rounded shadow">
        <table class="min-w-full text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-4">Name</th>
                    <th class="p-4">Breed</th>
                    <th class="p-4">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                <tr class="border-b">
                    <td class="p-4">{{ $pet->name }}</td>
                    <td class="p-4">{{ $pet->breed }}</td>
                    <td class="p-4">{{ $pet->age }} yrs</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection