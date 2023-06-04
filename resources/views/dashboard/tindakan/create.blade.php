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
      <form method="post" action="/dashboard/jadwal">
        @csrf
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" 
          {{-- @error('tanggal') is-invalid @enderror  --}}
          id="tanggal" name="tanggal">
          {{-- @error('tanggal')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror --}}
        </div>
        <div class="mb-3">
            <label for="lapangan" class="form-label">Lapangan</label>
            <select class="form-select" name="lapangan_id">
                @foreach($lapangans as $lapangan)
                @if(old('lapangan_id')==$lapangan->id)
                <option value="{{ $lapangan->id }}" selected> {{$lapangan->name}}</option>
                @else 
                <option value="{{ $lapangan->id }}"> {{$lapangan->name}}</option>
                @endif
                @endforeach
              </select>
            
          </div>

          <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <select class="form-select" name="jam_id">
                @foreach($jams as $jam)
                @if(old('jam_id')==$jam->id)
                <option value="{{ $jam->id }}" selected>{{$jam->jam}}</option>
                @else 
                <option value="{{ $jam->id }}">{{$jam->jam}}</option>
                @endif
                
                @endforeach
              </select>
          </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
  </div>
@endsection