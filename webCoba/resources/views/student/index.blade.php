
@extends('layout/main')

@section('title', 'daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="col-6">
	<h3 class="mt-3">Daftar Mahasiswa</h3>
   <div class="mt-3">
   <p>Cari Data Mahasiswa</p>
   <form action="/students/search" method="GET">
		<input type="text" name="cari" placeholder="Cari Data Mahasiswa" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
       <a href="/students/create" class="btn btn-info my-3">+ Tambah Data</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<ul class="list-group">
    @foreach($students as $std)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$std -> nama}}
    <a href="/students/{{$std->id}}" class="badge badge-info">detail</a>
  </li>
  
  @endforeach
</ul>

</div>
</div>
</div>
@endsection