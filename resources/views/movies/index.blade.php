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

                    <div class="flex items-baseline">
                        <a href="{{ $movie->edit_path }}" class="mr-1">
                            <svg class="h-4 w-4 cursor-pointer hover:text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        <form method="POST" action="{{ route('movies.destroy', ['movie' => $movie->id]) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                <svg class="h-4 w-4 cursor-pointer hover:text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
