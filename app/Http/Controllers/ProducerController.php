<?php

namespace App\Http\Controllers;
use App\Models\Producer;
use Illuminate\Http\Request;
use Redirect;


class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producer = Producer::all();
        return view('producers.index', compact('producer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producer= new Producer();

        $producer->name = $request->name;
        $producer->last_name = $request->last_name;
        $producer->nacionality= $request->nacionality;
        $producer->save();
        return Redirect::route('producers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(producer $producer)
    {
        $producer= Producer::findOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producer $producer)
    {
        return view('producers.edit', ['producer'=>$producer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producer $producer)
    {
        $producer->name = $request->name;
        $producer->last_name = $request->last_name;
        $producer->nacionality= $request->nacionality;
        $producer->save();
        return Redirect::route('producers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producer $producer)
    {
        $producer->delete($producer);
        return Redirect::route ('producers.index');
    }
}
