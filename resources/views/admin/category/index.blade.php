@extends('admin.layouts.blog')
@section('content')


<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
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
                    <div class="col-1 mb-3" >
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Добавить</a>
                    </div>
            </div>
            <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th colspan="3" class="text-center">Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->title}}</td>
                                                <td> <a href="{{route('admin.category.show', $category->id)}}"><i class="far fa-eye"></i></a> </td>
                                                <td> <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-edit"></i></a> </td>
                                                <td> <a href="#" class="text-danger"><i class="fas fa-times"></i></a> </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>
@endsection
