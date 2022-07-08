@extends('backend.layouts.master')
@section('title', 'Makale Listeleme')
@section('css')
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1299.6875px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Makale Listeleme</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Gösterge Paneli</a></li>
                            <li class="breadcrumb-item active">Makale Listeleme</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Makale Tablosu</h3>
                                <div class="card-tools">
                                    <a href="{{ route('article.create') }}" class="btn btn-sm btn-primary btn-flat"><i
                                            class="fa fa-plus fa-xs"></i> Makale Ekle</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 35%">Resim</th>
                                        <th style="width: 30%">Başlık</th>
                                        <th style="width: 20%">Kategori</th>
                                        <th style="width: 10%">İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $article)
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td><img src="{{ asset('').$article->image_url }}" width="100px" height="70px" /></td>
                                            <td>{{ $article->name }}</td>
                                            <td> {{ $article->category->name }}</td>
                                            <td>
                                                <a href="{{ route('article.edit',$article->id) }}"
                                                   class="badge bg-warning"><i class="fa fa-pen"></i></a> &nbsp;
                                                <a href="{{ route('article.destroy', $article->id) }}"
                                                   class="badge bg-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
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
