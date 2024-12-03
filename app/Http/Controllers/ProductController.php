<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\product_category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product_category::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.product.index', compact(['product']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = product_category::all();
        // dd($product);
        return view ('admin.product.create', compact(['product']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = product::create([
            'pdc_pictures_product'     => $request->pdc_pictures_product,
            'pdc_name'  => $request->pdc_name,
            'pdc_category_product_id'  => $request->ctg_category_product_id,
            'pdc_price'    => $request->pdc_price,
            'pdc_detail_product'=> $request->pdc_detail_product,
            'pdc_stok_product'=> $request->pdc_stock_product
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
