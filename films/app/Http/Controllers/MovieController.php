<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        return view('movies.index', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'director'=>'required'
        ]);

        Movie::create($request->all());
        return redirect()->back();
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->back();
    }
}
