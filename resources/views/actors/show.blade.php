@extends('layouts.app')

@section('title')
    Actors | {{ config('app.name') }}
@endsection

@section('content')
    <div class="mt-10 px-10">
        <h1 class="text-2xl font-bold">
            {{ $actor->name }}
        </h1>

        <div class="text-sm -mt-1.5">{{ $actor->birthdate }} born in {{ $actor->nationality }}</div>

        <div>{{ $actor->bio }}</div>

        <x-list-component :items="$actor->movies">Movies</x-list-component>
    </div>
@endsection
