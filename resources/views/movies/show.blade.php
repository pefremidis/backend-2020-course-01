@extends('layouts.app')

@section('title')
    {{ $movie->title }} | {{ config('app.name') }}
@endsection

@section('content')
    <div class="mt-10 px-10">
        <h1 class="text-2xl font-bold">{{ $movie->title }}</h1>

        <div>{{ $movie->rating }}</div>
        <div>{{ $movie->premiered_at }}</div>

        <x-list-component :items="$movie->actors">Actors</x-list-component>
    </div>
@endsection
