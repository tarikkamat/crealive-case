@extends('backend.layouts.master')
@section('title', 'Kategori Ekleme')
@section('css')
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1299.6875px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategori Ekleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Gösterge Paneli</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Kategori Listeleme</a>
                            </li>
                            <li class="breadcrumb-item active">Kategori Ekleme</li>
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
                                <h3 class="card-title">Kategori Ekleme Formu</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Kategori adı</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Laravel Course, Technology News, etc..">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Görünürlük</label>
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="1">Aktif</option>
                                            <option value="0">Pasif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-flat">Yeni kategori ekle
                                        </button>
                                        <a href="{{ route('category.index') }}"
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
@endsection
