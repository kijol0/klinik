@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Wilayah Specialis </h1>
    
  </div>
  @if(session()->has('success'))
  <div class="alert alert-danger  alert-dismissible fade show col-lg-10" role="alert">
   {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="col-lg-8">
      <form method="post" action="/dashboard/wilayah">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama wilayah</label>
          <input type="text" class="form-control" id="name" name="name">
          
        </div>
        
        
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
@endsection