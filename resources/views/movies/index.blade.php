@extends('layouts.app')

@section('title')
    Movies | {{ config('app.name') }}
@endsection

@section('content')
    <div class="mt-10 px-10">
        <h1 class="text-2xl font-bold">Movies</h1>

        <ul>
            @foreach($movies as $movie)
                <li>
                    <a href="{{ $movie->path }}" class="hover:text-indigo-700">
                        {{ $movie->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
