@extends('server.layouts.app')

@section('title')
    List Section Two
@endsection

@section('breadcumb-active')
<li class="breadcrumb-item"><a href="">Management Website</a></li>
<li class="breadcrumb-item active">Section Two</li>
@endsection

@section('title-page')
    Section Two
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

      .width-5{
        width: 5rem;
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
                        <a href="{{ route('section-two.create') }}" class="btn btn-info">Add Section Two</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data['section_twos'] as $section_two)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($section_two->image)
                            <img src="{{ asset($section_two->image) }}" height="80px">
                        @else
                            <img src="{{ asset('backend/dist/img/no-image.png') }}" height="80px">
                        @endif
                    </td>
                    <td>{{ $section_two->title }}</td>
                    <td>{{ Str::limit($section_two->description, 110, '...') }}</td>
                    <td class="width-5">
                      <div class="row">
                          <div class="col-md-12">
                              <a href="{{ route('section-two.edit', $section_two->id) }}" class="btn btn-warning text-white btn-sm btn-100">
                                  <i class="far fa-edit"></i> Edit
                              </a>
                          </div>
                          <div class="col-md-12">
                              <form action="{{ route('section-two.destroy', $section_two->id) }}" method="POST">
                                  @method('delete')
                                  @csrf
      
                                  <button type="submit" class="btn btn-danger btn-sm mt-3 btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $section_two->name }}?')">
                                      <i class="far fa-trash-alt"></i> Delete
                                  </button>
                              </form>
                          </div>
                      </div>                        
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
        title: 'Section Two added successfully!'
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
        title: 'Section Two edited successfully!'
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
        title: 'Section Two deleted successfully!'
      })
    });
  </script>
@endif    
@endsection