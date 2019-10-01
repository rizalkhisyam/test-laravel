
@extends('layout/main')

@section('title', 'daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="col-6">
	<h3 class="mt-3">Detail Mahasiswa</h3>
   <div class="mt-3">

<form method="post" action="/students">
@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror"  
    id="nama" placeholder="nama"
    name="nama" value="{{ old('nama') }}">
@error('nama')
  <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email"
    name="email" value="{{ old('email') }}">
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
    <div class="form-group">
    <label for="nrp">Nrp</label>
    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="nrp"
    name="nrp" value="{{ old('nrp') }}">
    @error('nrp')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-info my-3">Simpan</button>
</form>

</div>
</div>
</div>
@endsection