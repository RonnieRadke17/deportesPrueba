<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('periodos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periodos.create');
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
    public function actualizar()
    {
        return view('periodos.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
