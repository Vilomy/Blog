 @extends('admin.layouts.blog')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление Tag</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form action="{{ route('admin.tag.store') }}" method="POST" class="col-4">
              @csrf
              <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="title" placeholder="Название тэга">
                @error('title')
                  <div class="text-danger">Это поле обязательное для заполнения</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Создать</button>
            </form>
          </div>
        </div> <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
  </div>  <!-- /.content-wrapper -->
  @endsection