@extends('owner.master')

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
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Nama Pengeluaran</label>
                    <div class="col-sm-9">
                      <input type="text" name="otp_output_name" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('otp_output_name')
                      <div>error</div>
                    @enderror
                </div>
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Total Pengeluaran</label>
                    <div class="col-sm-9">
                      <input type="text" name="otp_output_total" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('otp_output_total')
                      <div>error</div>
                    @enderror
                </div>
                <div class="mb-4 row align-items-center">
                    <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Informasi</label>
                    <div class="col-sm-9">
                      <input type="text" name="otp_information" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                      onchange="this.setCustomValidity('')">
                    </div> 
                    @error('otp_information')
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