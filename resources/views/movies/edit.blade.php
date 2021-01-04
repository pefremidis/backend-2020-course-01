@extends('layouts.app')

@section('title')
    Edit {{ $movie->title }} | {{ config('app.name') }}
@endsection

@section('content')
    <div class="mt-10 px-10">
        <form class="space-y-8 divide-y divide-gray-200" method="POST" action="{{ route('movies.update', ['movie' => $movie->id]) }}">
            @csrf
            @method('PUT')

            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div class="space-y-6 sm:space-y-5">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Edit
                        </h3>
                    </div>

                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Title
                            </label>

                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input value="{{ $movie->title }}" type="text" name="title" id="title" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">

                                @error('title')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="rating" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Rating
                            </label>

                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input value="{{ $movie->rating }}" type="number" min="0" max="10" step="0.1" name="rating" id="rating" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">

                                @error('rating')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
