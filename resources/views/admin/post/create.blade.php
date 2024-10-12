@extends('admin.layouts.blog')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление Поста</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Добавление Поста</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.post.store')}}" method="POST">
                        @csrf
                        <div class="form-group w-25" >
                            <input type="text" class="form-control" name="title" placeholder="Название поста">
                            @error('title')
                                <div class="text-danger">
                                    <p>
                                        Это поле необходимо для заполнения
                                    </p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">

                            </textarea>
                        </div>
                        <div class="form-group">
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
