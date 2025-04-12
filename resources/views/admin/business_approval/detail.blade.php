@extends('owner.master_admin')

@push('link')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    SukMa | Izin Usaha
@endsection

@section('content')

<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Detail Usaha</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a class="text-muted text-decoration-none" href="../main/index.html"></a>
              </li>
           
            </ol>
          </nav>
        </div>
        
      </div>
    </div>
  </div>
  <div class="shop-detail">
    <div class="card shadow-none border">
      <div class="card-body p-4">
        <div class="row">
          <div class="col-lg-6">
            <div id="sync1" class="owl-carousel owl-theme">
              <div class="item rounded-4 overflow-hidden">
                <img src="{{ asset('storage/'.$business_submission->sbn_pictures_bussines)}}" alt="modernize-img" class="img-fluid">
              </div>
              
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shop-content">
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge text-bg-success fs-2 fw-semibold"></span>
                <span class="fs-2"></span>
              </div>
              <h4>Nama Bisnis :</h4>
              <h6 class="mb-0 fs-4">{{$business_submission->sbn_bussines_name}}</h6>
              
              <div class="d-flex align-items-center gap-8 pb-4 border-bottom">
                <ul class="list-unstyled d-flex align-items-center mb-0">
                 
              </div>
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge text-bg-success fs-2 fw-semibold"></span>
                <span class="fs-2"></span>
              </div>
              <h4>Nama Pemilik :</h4>
              <h6 class="mb-0 fs-4">{{$business_submission->sbn_owner_name}}</h6>
             
              <div class="d-flex align-items-center gap-8 pb-4 border-bottom">
                <ul class="list-unstyled d-flex align-items-center mb-0">
                 
              </div>
              <div class="d-flex align-items-center gap-8 py-7">
                <h4>Alamat :</h4>
              </div>
              <div>
                <h6 class="mb-0 fs-4">{{$business_submission->sbn_address}}</h6>
              </div>
              <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                
                {{-- <h6 class="mb-0 fs-4">No. Handphone :</h6>
                <h6 class="mb-0 fs-4">{{$business_submission->sbn_no_handphone}}</h6> --}}
              </div>
              
                <div class="input-group input-group-sm rounded">
                  
                  <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                    <h6 class="mb-0 fs-4">No. Handphone :</h6>
                    <h6 class="mb-0 fs-4">{{$business_submission->sbn_no_handphone}}</h6>
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @push('script')
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script src="{{asset('assets/js/datatable/datatable-advanced.init.js')}}"></script>
@endpush