<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('courses.store') }}">
                        @csrf

                        <div class="mb-4 flex items-center space-x-0">
                            <div class="flex-1">
                                <label for="title" class="block text-sm font-medium text-gray-700">Course Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" required class="block w-full border-gray-300 rounded-l-md rounded-r-none shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-10 {{ $errors->has('title') ? 'border-red-500' : '' }}">

                                {{-- Display error message if title is invalid --}}
                                @error('title')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="border border-green-600 bg-green-500 text-white rounded-r-md rounded-l-none px-3 py-2 h-10 hover:bg-green-600 hover:border-green-700 transition-colors duration-200 mt-4 sm:mt-5">
                                Create Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
