@extends('backend.layouts.master')
@section('title', 'Kategori Düzenleme')
@section('css')
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1299.6875px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategori Düzenleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Gösterge Paneli</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Kategori Listeleme</a>
                            </li>
                            <li class="breadcrumb-item active">Kategori Düzenleme</li>
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
                                <h3 class="card-title">Kategori Düzenleme Formu</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('category.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $category->id }}" />
                                    <div class="form-group">
                                        <label for="title">Kategori adı</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{  $category->name }}">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Kategori URL</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                               value="{{  $category->slug }}">
                                        @error('slug')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Görünürlük</label>
                                        <select class="form-control" id="is_active" name="is_active">
                                            <option value="{{ $category->is_active }}" selected>
                                                @if($category->is_active == true)
                                                    Aktif
                                            </option>
                                            <option value="0">Pasif</option>
                                            @else
                                                Pasif
                                                </option>
                                                <option value="1">Aktif</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-flat">Güncelle</button>
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
