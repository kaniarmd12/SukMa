@extends('owner.master')

@push('link')
    
@endpush

@section('title')
    SukMa | Tambah Usaha
@endsection

@section('content')
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Tambah Usaha</h4>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                
                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Nama Usaha</label>
                  <div class="col-sm-9">
                    <input type="text" name="sbn_bussines_name" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div> 
                  @error('sbn_bussines_name')
                    <div>error</div>
                  @enderror
                </div>
               
                

                <div class="mb-4 row align-items-center">
                  <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">No. telepon</label>
                  <div class="col-sm-9">
                    <input type="text" name="sbn_no_handphone" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                    onchange="this.setCustomValidity('')">
                  </div> 
                  @error('sbn_no_handphone')
                    <div>error</div>
                  @enderror
              </div>

              <div class="mb-4 row align-items-center">
                <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Alamat lengkap</label>
                <div class="col-sm-9">
                  <input type="text" name="sbn_address" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                  onchange="this.setCustomValidity('')">
                </div> 
                @error('sbn_address')
                  <div>error</div>
                @enderror
            </div>

            <div class="mb-4 row align-items-center">
              <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Foto Usaha</label>
              <div class="col-sm-9">
                <input type="file" name="sbn_pictures_bussines" class="form-control" id="exampleInputText2" placeholder="" required oninvalid="this.setCustomValidity('Singkatan Wajib Diisi')" 
                onchange="this.setCustomValidity('')">
              </div> 
              @error('sbn_pictures_bussines')
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