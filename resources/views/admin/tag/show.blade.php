@extends('admin.layouts.blog')
@section('content')


<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-3">{{$tag->title}}</h1>
                    <a href="{{route('admin.tag.edit', $tag->id)}}" class="text-success"><i class="fas fa-edit"></i></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Тэги</li>
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
                                        <td>{{$tag->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$tag->title}}</td>
                                    </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="ml-3 d-flex align-items-center">
        <a href="{{route('admin.tag.edit', $tag->id)}}" class="btn btn-success">Редактировать тэг</a>
        <form class="m-3" action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить тэг</button>
        </form>
        <a href="{{route('admin.tag.index')}}" class="btn btn-second">Вернуться к списку тэгов</a>
    </div>
</div>
@endsection
