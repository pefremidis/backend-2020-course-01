<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        //validation

        Movie::create([
            'title' => $request->title,
            'rating' => $request->rating,
        ]);

        return redirect(route('movies.index'));
    }

    public function edit(Movie $movie)
    {
        dd($movie);
    }
}
