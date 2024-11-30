<?php

namespace App\Http\Controllers;

use App\Models\product_category;
use Illuminate\Http\Request;
Use Alert;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_category = product_category::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.category_product.index', compact(['product_category']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.category_product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $createProductCategory = product_category::create([
            'ctg_name' => $request->ctg_name
        ]);
        Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Kategori Produk');

        return redirect('/admin/ProductCategory'); 
    }
    /**
     * Display the specified resource.
     */
    public function show(product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product_category $product_category,$id)
    {
        $product_category = product_category::FindOrFail($id);
        return view ('admin.category_product.edit',compact(['product_category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product_category $product_category, $id)
    {
        $updateproduct_category = product_category::FindOrFail($id);
        $updateproduct_category->ctg_name = $request->ctg_name;
        $updateproduct_category->save();
        return redirect('/admin/ProductCategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product_category $product_category, $id)
    {
        $product_category = product_category::findOrFail($id)->first();
        // dd ($product_category);
        $product_category->delete();
        return redirect('/admin/ProductCategory');
        
    }
}
