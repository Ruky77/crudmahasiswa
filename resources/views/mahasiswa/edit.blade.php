@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        @include('mahasiswa.form')

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
