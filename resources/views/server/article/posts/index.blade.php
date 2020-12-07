@extends('server.layouts.app')

@section('title')
    List Posts
@endsection

@section('breadcumb-active')
<li class="breadcrumb-item"><a href="">Article</a></li>
<li class="breadcrumb-item active">Posts</li>
@endsection

@section('title-page')
    Posts
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <style>
      .btn-100{
          width: 100%;
      }
  </style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 d-flex flex-row-reverse">
                        <a href="{{ route('posts.create') }}" class="btn btn-info">Add Post</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$post->thumbnail) }}" height="80px">
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        @if ($post->status == 'PUBLISHED')
                            <span class="badge badge-success">
                                {{ $post->status }}
                            </span>
                        @else
                            <span class="badge badge-danger">
                                {{ $post->status }}
                            </span>
                        @endif
                    </td>
                    {{-- <td>{{ Str::limit($post->description, 110, '...') }}</td> --}}
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning text-white btn-sm btn-100">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm mt-1 btn-100">
                            <i class="far fa-eye"></i> Show
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm mt-1 btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $post->name }}?')">
                                <i class="far fa-trash-alt"></i> Delete
                            </button>
                        </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection

@section('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["colvis"]
    }).buttons().container().appendTo('.card-header .col-md-6:eq(0)');
  });
</script>

@if (session('create'))
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      Toast.fire({
        icon: 'success',
        title: 'Post added successfully!'
      })
    });
  </script>
@endif    

@if (session('update'))
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      Toast.fire({
        icon: 'success',
        title: 'Post edited successfully!'
      })
    });
  </script>
@endif    

@if (session('delete'))
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      Toast.fire({
        icon: 'success',
        title: 'Post deleted successfully!'
      })
    });
  </script>
@endif  
@endsection