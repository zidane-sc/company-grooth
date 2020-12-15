@extends('server.layouts.app')

@section('title')
    List Features
@endsection

@section('breadcumb-active')
<li class="breadcrumb-item"><a href="">Management Product</a></li>
<li class="breadcrumb-item active">Features</li>
@endsection

@section('title-page')
    Features
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
        <div class="col-10">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-5 d-flex flex-row-reverse">
                        <a href="{{ route('features.create') }}" class="btn btn-info">Add Feature</a>
                    </div>
                    <div class="col-md-4">
                        <form action="" method="get">
                            <div class="">
                                <div class="input-group">
                                    <select class="form-control"  name="product" id="product">
                                        <option selected>All</option>
                                        @foreach ($data['products'] as $product)
                                            <option value="{{ $product->id }}" {{ Request::get('product') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-success" type="submit">
                                         Go
                                      </button>
                                    </div>
                                  </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data['features'] as $feature)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset($feature->image) }}" height="80px">
                    </td>
                    <td>{{ $feature->name }}</td>
                    <td>
                      <ul>
                        @foreach (json_decode($feature->description) as $description)
                          @if ($loop->iteration == 5)
                              @break
                          @endif
                          @if ($description != null)
                            <li>{{ Str::limit($description, 10, '...') }}</li>
                          @endif
                        @endforeach
                      </ul>
                    <td>
                        <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-warning text-white btn-sm btn-100">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('features.destroy', $feature->id) }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm mt-3 btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $feature->name }}?')">
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
    }).buttons().container().appendTo('.card-header .col-md-3:eq(0)');
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
        title: 'Feature added successfully!'
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
        title: 'Feature edited successfully!'
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
        title: 'Feature deleted successfully!'
      })
    });
  </script>
@endif  
@endsection