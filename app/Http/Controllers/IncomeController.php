<?php

namespace App\Http\Controllers;

use App\Models\income;
use Illuminate\Http\Request;
use Alert;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income = income::all();
        return view('owner.income.index', compact(['income']));
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
    public function show(income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(income $income)
    {
        //
    }
}
