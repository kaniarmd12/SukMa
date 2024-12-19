<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     
    public function index()
    {
        $orders = order::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('owner.order.index', compact(['orders']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('owner.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
   

    // Upload gambar
    $imagePath = $request->file('pdc_pictures_product')->store('products', 'public'); // Simpan ke direktori 'storage/app/public/products'

    // Simpan data ke database
    $product = Product::create([
        'odr_customer_id' => $request->odr_customer_id,
        'odr_product_id' => $request->odr_product_id,
        'odr_status_order' => $request->odr_status_order,
        'odr_total' => $request->odr_total,
    
    ]);

    // Berikan notifikasi sukses
    Alert::success('Berhasil Ditambahkan', 'Berhasil Menambahkan Produk');

    return redirect('/owner/order');
}

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order, $id)
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
        $data = [
                'pdc_name' => $request->pdc_name,
                'pdc_category_product_id' => $request->ctg_category_product_id,
                'pdc_price' => $request->pdc_price,
                'pdc_detail_product' => $request->pdc_detail_product,
                'pdc_stok_product' => $request->pdc_stock_product
        ];
        if($request->file('pdc_pictures_product')){
         $imagePath = $request->file('pdc_pictures_product')->store('products', 'public');  
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
