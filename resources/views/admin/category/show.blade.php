@extends('admin.layouts.blog')
@section('content')


<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-3">{{$category->title}}</h1>
                    <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-edit"></i></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Категории</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$category->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$category->title}}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    <div class="ml-3">
        <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-success">Редактировать категорию</a>
        <a href="#" class="btn btn-danger">Удалить категорию</a>
        <a href="{{route('admin.category.index')}}" class="btn btn-second">Вернуться к списку категорий</a>
    </div>
</div>
@endsection
