<?php

namespace App\Http\Controllers;

use App\Models\output;
use Illuminate\Http\Request;
use Alert;

class OutputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $output = output::all();
            $title = 'Delete User!';
            $text = "Are you sure you want to delete?";
            confirmDelete($title, $text);
            return view('owner.output.index', compact(['output']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $output = output::all();
        // dd($product);
        return view ('owner.output.create', compact(['output']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input
    $request->validate([
        'otp_output_name' => 'required|string|max:255',
        'otp_output_total' => 'required|numeric',
        'otp_information' => 'required|string',
    ]); 

        $output = output::create([
            'otp_output_name' => $request->otp_output_name,
            'otp_output_total' => $request->otp_output_total,
            'otp_information' => $request->otp_information,
    ]);

    Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Produk');

    return redirect('/owner/output');
    }

    /**
     * Display the specified resource.
     */
    public function show(output $output)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(output $output,$id)
    {
        $output = output::with('output')->findOrFail($id); // Muat relasi kategori
        $outputs = output::all(); // Ambil semua kategori
        return view('owner.output.edit', compact('output', 'outputs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, output $output,$id)
    {
       
        $output = output::FindOrFail($id);
        $output->otp_output_name = $request->otp_output_name;
        $output->otp_output_total = $request->otp_output_total;
        $output->otp_information = $request->otp_information;
        $output->save();
        return redirect('/owner/output');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(output $output,$id)

    {
        $output = output::findOrFail($id)->first();
        // dd ($product_category);
        $output->delete();
        return redirect('/owner/output');
    }
}
