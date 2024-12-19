<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\Models\bussines;
use Alert;

class BussinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Ambil semua data bisnis dari database
    $bussines = bussines::all();

    // Kirimkan data ke view
    return view('owner.bussines.index', compact('bussines'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(bussines $bussines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bussines $bussines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bussines $bussines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bussines $bussines)
    {
        //
    }
}
