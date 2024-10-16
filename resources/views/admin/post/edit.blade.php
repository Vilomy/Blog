@extends('admin.layouts.blog')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Поста: {{$category->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Редактирование Поста</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.post.update', $post->id) }}" method="post" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Название поста">
                            @error('title')
                                <div class="text-danger">
                                    <p>
                                        Это поле необходимо для заполнения
                                    </p>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary mr-3" value="Сохранить">
                            <a href="{{route('admin.post.index')}}" class="btn btn-second">Отмена</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
