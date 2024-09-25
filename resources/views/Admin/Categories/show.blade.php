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

@section('content')
    <div class="card mt-6">
        <!-- header -->
         <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Categorie Admin</h1>
         </div>
        <!-- end header -->

        
        <div class="py-4 px-6">
            <h2 class="text-lg font-semibold text-gray-800">Categorie Details</h2>
            <p class="py-2 text-lg text-gray-700">Naam: {{ $category->name }}</p>
        </div>
    </div>
@endsection