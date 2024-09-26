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

        
        <div class="card-body grid grid-cols-1 gap-6 lg:grid-cols-1">
            <div class="p-4">
                <form id="form" class="shadow-md rounded-lg px-8 pt-6 pb-8 mb-4"
                      action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                @method('DELETE')
                @csrf

                <label class="block text-sm">
                    <span class="text-gray-700">Name</span>
                    <input class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus: shadow-outline-purple form-input" name="name" value="{{ old('name', $category->name) }}" type="text" disabled/>
                </label>
                
                <button class="mt-2 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active: bg-purple-600 hover:bg-purple-700 focus:outline-none focus: shadow-outline-purple">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection