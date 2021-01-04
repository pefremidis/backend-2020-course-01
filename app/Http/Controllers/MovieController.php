<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieFormRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function show(Movie $movie)
    {
        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(MovieFormRequest $request)
    {
        $request->insert();

        return redirect(route('movies.index'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', [
            'movie' => $movie
        ]);
    }

    public function update(MovieFormRequest $request, Movie $movie) {
        $request->update($movie);

        return redirect(route('movies.index'));
    }

    public function destroy(Movie $movie) {
        $movie->delete();

        return redirect(route('movies.index'));
    }
}
