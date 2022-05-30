@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('article.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Judul Artikel</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Artikel" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="writer">Penulis Artikel</label>
                <input type="text" class="form-control" name="writer" placeholder="Penulis Artikel" value="{{ old('writer') }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" rows="10" class="d-block w-100 from-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="published">Publish</label>
                <input type="date" class="form-control" name="published" placeholder="published at" value="{{ old('published') }}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Simpan
            </button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection