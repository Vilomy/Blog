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
                        <li class="breadcrumb-item active">Добавление Поста</li>0
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.post.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group w-25" >
                            <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{old('title')}}">
                            @error('title')
                                <div class="text-danger">
                                    <p>
                                        Это поле необходимо для заполнения
                                    </p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <textarea id="summernote" name="content">{{old('content')}}</textarea>
                            @error('content')
                            <div class="text-danger">
                                <p>
                                    Это поле необходимо для заполнения
                                </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Select</label>
                            <select name="category_id" class="form-control w-25">
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }} ">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">
                                <p>
                                    Поле необходимо выбрать
                                </p>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group w-25">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Главное изображение</label>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">
                                <p>
                                    Изображение необходимо выбрать
                                </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group w-25">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Превью</label>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">
                                <p>
                                    Изображение необходимо выбрать
                                </p>
                            </div>
                            @enderror
                        </div>
                        {{--preview_image--}}
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
