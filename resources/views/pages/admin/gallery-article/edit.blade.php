@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Gallery Artikel</h1>
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
        <form action="{{ route('gallery-article.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="article_id">Artikel Daging</label>
                <select name="article_id" required class="form-control">
                    <option value="{{ $item->article_id }}">Jangan Diubah</option>
                    @foreach($article as $articles)
                    <option value="{{ $article->id }}">
                        {{ $article->title }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image">
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Ubah
            </button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection