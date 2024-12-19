<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\product_category;
use Alert;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = product::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('owner.product.index', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = product_category::all();
        // dd($product);
        return view ('owner.product.create', compact(['product']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'pdc_pictures_product' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        'pdc_name' => 'required|string|max:255',
        'ctg_category_product_id' => 'required|integer',
        'pdc_price' => 'required|numeric',
        'pdc_detail_product' => 'required|string',
        'pdc_stock_product' => 'required|integer',
    ]);

    // Upload gambar
    $imagePath = $request->file('pdc_pictures_product')->store('products', 'public'); // Simpan ke direktori 'storage/app/public/products'

    // Simpan data ke database
    $product = Product::create([
        'pdc_pictures_product' => $imagePath, // Path file disimpan di database
        'pdc_name' => $request->pdc_name,
        'pdc_category_product_id' => $request->ctg_category_product_id,
        'pdc_price' => $request->pdc_price,
        'pdc_detail_product' => $request->pdc_detail_product,
        'pdc_stok_product' => $request->pdc_stock_product
    ]);

    // Berikan notifikasi sukses
    Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Produk');

    return redirect('/owner/Product');
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
    public function edit(product $product, $id)
    {
        $product = Product::with('product_category')->findOrFail($id); // Muat relasi kategori
        $product_category = product_category::all(); // Ambil semua kategori
        return view('owner.product.edit', compact('product', 'product_category'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product ,$id)
    {
        if($request->file('pdc_pictures_product')){
            $imagePath = $request->file('pdc_pictures_product')->store('products', 'public'); 
            $data = [
                'pdc_name' => $request->pdc_name,
                'pdc_category_product_id' => $request->ctg_category_product_id,
                'pdc_price' => $request->pdc_price,
                'pdc_detail_product' => $request->pdc_detail_product,
                'pdc_stok_product' => $request->pdc_stock_product,
                'pdc_pictures_product' => $imagePath,
                 // Path file disimpan di database
                
             ];
             
           }else{
            $data = [
                'pdc_name' => $request->pdc_name,
                'pdc_category_product_id' => $request->ctg_category_product_id,
                'pdc_price' => $request->pdc_price,
                'pdc_detail_product' => $request->pdc_detail_product,
                'pdc_stok_product' => $request->pdc_stock_product,
                
                 // Path file disimpan di database
                
             ];
           }
        
        
        
        $productUpdate = Product::findOrFail($id)->update($data);
        Alert::success('Berhasil Mengubah', 'Kelas Berhasil Diubah');
        return redirect('/owner/Product');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product, $id)
    {
        $product = product::findOrFail($id)->first();
        // dd ($Product);
        $product->delete();
        return redirect('/owner/Product');
        
    }
}
