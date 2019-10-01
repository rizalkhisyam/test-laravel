
@extends('layout/main')

@section('title', 'daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="col-6">
	<h3 class="mt-3">Detail Mahasiswa</h3>
   <div class="mt-3">
    
<div class="card" style="">
  <div class="card-body">
    <h5 class="card-title">{{$student->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
    <p class="card-text">{{$student->nrp}}</p>
    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>

    <form action="{{$student->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
    
    
  </div>
</div>

</div>
</div>
</div>
@endsection