@extends('admin.master')

@push('link')
    
@endpush

@section('title')
    SukMa | Tambah Produk
@endsection

@section('content')
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Tambah Produk</h4>
          </div>
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Gambar Produk</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" name="pdc_pictures_product" id="formFile">
                  </div>
                  @error('pdc_name')
                    <div>error</div>
                  @enderror
                </div>
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Nama Produk</label>
                  <div class="col-sm-9">
                    <input type="text" name="pdc_name" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div> 
                  @error('pdc_prefix')
                    <div>error</div>
                  @enderror
                </div>
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Kategori Produk</label>
                    <div class="col-sm-9">
                      <select class="form-select mr-sm-2" id="inlineFormCustomSelect" name="ctg_category_product_id" oninvalid="this.setCustomValidity('Tingkatan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')" required>
                      <option selected value="" >Pilih...</option>
                      @foreach ($product as $product)
                        <option value="{{$product->ctg_id}}">{{$product->ctg_name}}</option>
                      @endforeach
                  </select>
                    </div>
                    @error('pdc_name')
                      <div>error</div>
                    @enderror
                  </div>

                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Harga Produk</label>
                    <div class="col-sm-9">
                      <input type="text" name="pdc_price" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('pdc_prefix')
                      <div>error</div>
                    @enderror
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Detail Produk</label>
                    <div class="col-sm-9">
                      <input type="text" name="pdc_detail_product" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('pdc_prefix')
                      <div>error</div>
                    @enderror
                  </div>
                
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Stok Produk</label>
                    <div class="col-sm-9">
                      <input type="text" name="pdc_stock_product" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('pdc_prefix')
                      <div>error</div>
                    @enderror
                  </div>
                
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="Kirim" id="">
                  </div>
                </div>
              </div>
          </form>
        </div>
    </div>
 </div>
  
@endsection



@push('script')
    
@endpush