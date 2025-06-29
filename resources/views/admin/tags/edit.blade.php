   @extends('admin.layouts.blog')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование Tag - {{ $tag->title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
           <div class="row">
              <div class="col-3">
                <div class="card">
                  <div class="card-body table-responsive p-0">
                    <form action="{{ route('admin.tag.update', $tag->id ) }}" method="POST" class="col-4">
                      @csrf
                      @method('PATCH')
                      <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="title" placeholder="Название тэга" value="{{ $tag->title }}">
                        @error('title')
                          <div class="text-danger">Это поле обязательное для заполнения</div>
                        @enderror
                      </div>
                      <button type="submit" class="mb-3 btn btn-primary">Сохранить</button>
                    </form>
                  </div>  <!-- /.card-body -->
                </div> <!-- /.card -->
              </div>
            </div>
          </div>
        </div> <!-- /.row -->
            <!-- Button back -->
        <div class="col-1 mb-3">
          <a href="{{ route('admin.tag.index') }}" class="btn btn-block btn-primary">Вернуться</a>
        </div><!-- /.Button back -->
      </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
  </div>  <!-- /.content-wrapper -->
  @endsection