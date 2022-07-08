@extends('backend.layouts.master')
@section('title','Gösterge Paneli')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gösterge Paneli</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Neler var?
                                </h4>
                            </div>
                        </a>
                        <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p class="fz-12">
                                Kategori için ekleme, düzenleme, silme işlemleri.<br /><br />
                                Makale için ekleme, düzenleme, silme işlemleri.<br /><br />
                                Ön tarafta makale için devamını okuma, kategori bazlı içerik listeleme.<br /><br />
                                Admin paneli için config/menu.php ile yapılmış menü sistemi, sweetalert entegresi.<br /><br />
                                Oturum başlatma, sonlandırma.<br /><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
