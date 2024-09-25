@extends('layouts.layoutadmin')

@section('topmenu')
    <nav class="card">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-strech sm:justify-start">
                    <div class="sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: *bg-gray-900 text-white*, Default: *text-gray-300 hover:bg-gray-700 hover:text-white* -->
                             <<a href="" class="text-gray-800 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Overzicht Categorie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection
<tbody class="bg-white divide-y">
@foreach($categories as $category)
    <tr class="text-gray-700">
        <td class="px-4 py-3 text-sm">{{ $category->name }}</td>
        <td class="px-4 py-3 text-sm"><a href="">Details</a></td>
        <td class="px-4 py-3">
            <div class="flex items-center space-x-4 text-sm">
                <a href="">Wijzigen</a>
            </div>
        </td>
        <td class="px-4 py-3 text-sm">
            <div class="flex items-center space-x-4 text-sm">
                <a href="">Verwijderen</a>
            </div>
        </td>
    </tr>
@endforeach
</tbody>