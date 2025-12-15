<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies=movie::all();
        return view ('movies.index', compact('movies'));
    }

    public function store(Request $request){
        $request->validate(
            [
                'title'=>'required',
                'director'=>'required'
            ]
            );
        movie::create($request->all());
        return redirect()->back();
    }

    public function destroy(movie $movie){
        $movie->delete();
        return redirect()->back();
    }
}
