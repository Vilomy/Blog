@extends('admin.layouts.blog')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление Тэга</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Добавление Тэга</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <form action="#" class="w-25">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Название Тэга">
                    </div>
                </form>
                <div class="col-1">
                    <a href="{{route('admin.tag.index')}}" class="btn btn-primary">Сохранить</a>    
                </div>
            </div>
    </section>
</div>

@endsection