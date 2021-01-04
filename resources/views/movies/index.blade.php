@extends('layouts.app')

@section('title')
    Movies | {{ config('app.name') }}
@endsection

@section('content')
    <div class="mt-10 px-10">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Movies</h1>

            <a href="{{ route('movies.create') }}" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                New
            </a>
        </div>

        <ul class="mt-2">
            @foreach($movies as $movie)
                <li class="flex items-center justify-between hover:bg-gray-100 px-3 py-0.5 -mx-3">
                    <a href="{{ $movie->path }}" class="hover:text-green-600">
                        {{ $movie->title }}
                    </a>

                    <a href="{{ $movie->edit_path }}">
                        <svg class="h-4 w-4 cursor-pointer hover:text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
