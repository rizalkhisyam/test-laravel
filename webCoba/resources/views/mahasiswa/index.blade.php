
@extends('layout/main')

@section('title', 'daftar Mahasiswa')

@section('container')
<div class="container">
	<h3 class="mt-3">Daftar Mahasiswa</h3>
   <div class="container mt-3">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($mahasiswa as $mhs)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$mhs->nama}}</td>
      <td>{{$mhs->nrp}}</td>
      <td>{{$mhs->email}}</td>
      <td>
      	<a href="" class="badge badge-success">Edit</a>
      	<a href="" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
</div>
@endsection