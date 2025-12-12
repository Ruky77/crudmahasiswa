@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Mahasiswa</h3>

    <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        @include('mahasiswa.form')

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
