<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      return "I am from index function";

        // return redirect()->route('demo.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "I am from Create function";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "the model has been updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "the model has been deleted";
    }
}
