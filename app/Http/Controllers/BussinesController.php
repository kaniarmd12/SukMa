<?php

namespace App\Http\Controllers;

use App\Models\bussines;
use Illuminate\Http\Request;

class BussinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.bussines.index');
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
