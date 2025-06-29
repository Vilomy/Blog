   @extends('admin.layouts.blog')

 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0">Tag - {{ $tag->title }} </h1>
            <a href="{{ route('admin.tag.edit', $tag->id )}}"><i class="mlgi-2 mh-2 fas fa-pencil-alt text-success"></i></a>
            <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger" role="button" ></i>
              </button>
            </form>
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
                    <table class="table table-hover text-nowrap">
                      <tbody>
                          <tr>
                            <td>ID</td>
                            <td>{{ $tag->id }}</td>
                          </tr>
                          <tr>
                            <td>Название</td>
                            <td>{{ $tag->title }}</td>
                          </tr
                      </tbody>
                    </table>
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