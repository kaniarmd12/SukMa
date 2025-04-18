<?php

namespace App\Http\Controllers\Admin;

use App\Models\business_submission;
use App\Models\User;

use Illuminate\Http\Request;
use Alert;

class BusinessApprovalController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business_submission = business_submission::all();
        $users = User::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.business_approval.index',compact(['business_submission']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $users = User::all();
        return view ('owner.business_approval.create', compact(['users']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $users = User::all();
        $business_submission = business_submission::findOrFail($id);

        return view('admin.business_approval.detail',compact(['business_submission','users']));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business_Approval $business_Approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business_Approval $business_Approval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $business_Approval = business_submission::findOrFail($id)->first();
        // dd ($product_category);
        $business_Approval->delete();
        return redirect('/admin/Business_Approval');
    }
    public function approve($id)
    {
        $business_submission = business_submission::findOrFail($id);
        $business_submission->update([
            'sbn_status' => 1
        ]);
        Alert::success('Berhasil Disetujui', 'Usaha Berhasil disetujui');

        return redirect('/admin/Business_Approval');
    }
}
