@extends('server.layouts.app')

@section('title')
    List Admin
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item active">Admin</li>
@endsection

@section('title-page')
    Admin
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-9">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 d-flex flex-row-reverse">
                        <a href="{{ route('users.create') }}" class="btn btn-info">Add Admin</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data['users'] as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($user->avatar)
                            <img src="{{ asset('storage/'.$user->avatar) }}" width="40px">
                        @else
                            <img src="{{ asset('backend/dist/img/avatar.png') }}" width="40px">
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex justify-space-between">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning text-white btn-sm">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm ml-3" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $user->name }} ?')">
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
            title: 'Admin added successfully!'
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
        title: 'Admin edited successfully!'
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
    });

    Toast.fire({
        icon: 'success',
        title: 'Admin deleted successfully!'
      })
  </script>
@endif    

@endsection