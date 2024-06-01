<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie= new Movie();

        $movie->name = $request->name;
        $movie->gender = $request->gender;
        $movie->year = $request->year;
        $movie->name_producer= $request->name_producer;
        
        $movie->save();
        return Redirect::route('movies.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movie= Movie::findOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie'=>$movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->name = $request->name;
        $movie->gender = $request->gender;
        $movie->year = $request->year;
        $movie->name_producer= $request->name_producer;
        
        $movie->save();
        return Redirect::route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete($movie);
        return Redirect::route ('movies.index');
    }
}
