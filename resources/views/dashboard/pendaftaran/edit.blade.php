@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Tindakan </h1>
    
  </div>
  @if(session()->has('success'))
  <div class="alert alert-danger  alert-dismissible fade show col-lg-10" role="alert">
   {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="col-lg-8">
      <form method="post" action="/dashboard/tindakan/{{ $tindakan->id }}">
        @method('put')
        @csrf
        <div class="col-lg-8">
          <form method="post" action="/dashboard/pendaftaran">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="{{ $pasien->name }}">
              
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="{{ $pasien->alamat }}">
                
            </div>
            <div class="mb-3">
              <label for="telepon" class="form-label">telpon</label>
              <input type="text" class="form-control" id="telepon" name="telepon" placeholder="{{ $pasien->telepon }}">
              
            </div>
            <div class="mb-3">
              <label for="tanggal" class="form-label"></label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="{{ $pasien->tanggal_lahir }}">
              
            </div> 
 
        
        <button type="submit" class="btn btn-primary">edit</button>
      </form>
  </div>
@endsection