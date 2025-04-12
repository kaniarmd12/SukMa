<?php

namespace App\Http\Controllers;

use App\Models\business_submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Alert;

class BusinessSubmissionController extends Controller
{
    public function index()
    {
        $business_submission = business_submission::all();
        $users = User::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('owner.bussines_submission.index', compact(['business_submission','users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view ('owner.bussines_submission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        // $createBusinessSubmission = business_submission::create([
        //     'sbn_bussines_name' => $request->sbn_bussines_name
        // ]);
        // Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Kategori Produk');

        // return redirect('/owner/BusinessSubmission'); 
         // Upload gambar
    $imagePath = $request->file('sbn_pictures_bussines')->store('business_submission', 'public'); // Simpan ke direktori 'storage/app/public/products'

    // Simpan data ke database
    $business_submission = business_submission::create([
        'sbn_bussines_name' => $request->sbn_bussines_name,
        'sbn_owner_id' => Auth::user()->usr_id,
        'sbn_no_handphone' => $request->sbn_no_handphone,
        'sbn_address' => $request->sbn_address,
        'sbn_pictures_bussines' => $imagePath, // Path file disimpan di database
        
    ]);

    // Berikan notifikasi sukses
    Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Produk');

    return redirect('/owner/BussinesSubmission');
    }
    /**
     * Display the specified resource.
     */
    public function show(business_submission $business_submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(business_submission $business_submission,$id)
    {
        $users = User::all();
        $business_submission = business_submission::FindOrFail($id);
        return view ('owner.business_submission.edit',compact(['business_submission','users']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, business_submission $business_submission, $id)
    {
        $updatebusiness_submission = business_submission::FindOrFail($id);
        $updatebusiness_submission->sbn_bussines_name = $request->sbn_bussines_name;
        $updatebusiness_submission->save();
        return redirect('/owner/BusinessSubmission');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(business_submission $business_submission, $id)
    {
        $product_category = business_submission::findOrFail($id)->first();
        // dd ($business_submission);
        $business_submission->delete();
        return redirect('/owner/BusinessSubmission');
        
    }
}
