@extends('backend.layouts.master')
@section('title', 'Makale Düzenleme')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1299.6875px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Makale Düzenleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Gösterge Paneli</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Makale Listeleme</a>
                            </li>
                            <li class="breadcrumb-item active">Makale Düzenleme</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Makale Ekleme Formu</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('article.update') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$article->id}}" />
                                    <div class="form-group">
                                        <label for="name">Başlık</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{ $article->name }}">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">İçerik</label>
                                        <textarea class="form-control" name="description" id="editor">{{ $article->description }}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Etiketler</label>
                                        <input type="text" class="form-control" id="tags" name="tags"
                                               value="{{ $article->tags }}">
                                        @error('tags')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control" id="category_id" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Güncel resim</label><br />
                                        <img width = "100px" height = "100px" src="{{ asset('').$article->image_url}}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ön resim yükle</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"  id="image" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-flat">Güncelle
                                        </button>
                                        <a href="{{ route('article.index') }}"
                                           class="btn btn-warning btn-flat">Vazgeç</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote({
                'height' : 300
            });
        });
    </script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
@endsection
