@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Wilayah Specialis</h1>
    
  </div>

  @if(session()->has('success'))
      <div class="alert alert-success  alert-dismissible fade show col-lg-10" role="alert">
       {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    
  <div class="table-responsive col-lg-10">
    <a href="/dashboard/wilayah/create" class="btn btn-primary mb-3">Tambah Wilayah</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Specialis</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($wilayah as $wilayah)
        @csrf
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $wilayah->name }}</td>
            
            <td>
              <form action="/dashboard/wilayah/{{ $wilayah->id }}/edit" class="d-inline">
                @csrf
                <button class=" bg-warning" ><span>Edit</span></button>
              </form>
                <form action="/dashboard/wilayah/{{ $wilayah->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class=" bg-danger" onclick="return confirm('Anda yakin menghapus data ini?')"><span data-feather="trash"></span></button>
                </form>
                
                
            </td>
           
          </tr>  
         @endforeach
        
      </tbody>

      
    </table>

    
  </div>
@endsection