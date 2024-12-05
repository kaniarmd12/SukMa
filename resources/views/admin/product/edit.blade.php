@extends('admin.master')

@push('link')
    
@endpush

@section('title')
    SukMa | Edit Produk
@endsection

@section('content')
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Edit Kategori</h4>
          </div>
          <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Tambah Produk</label>
                  <div class="col-sm-9">
                    <input type="text" name="pdc_name" value="{{$product->pdc_name}}" class="form-control" id="exampleInputText1" placeholder="" required oninvalid="this.setCustomValidity('Nama Produk Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div>
                  @error('pdc_name')
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