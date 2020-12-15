@extends('server.layouts.app')

@section('title')
    List Products
@endsection

@section('breadcumb-active')
<li class="breadcrumb-item"><a href="">Management Product</a></li>
<li class="breadcrumb-item active">Products</li>
@endsection

@section('title-page')
    Products
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
                        <a href="{{ route('products.create') }}" class="btn btn-info">Add Product</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Banner</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image Description</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data['products'] as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset($product->banner) }}" height="80px">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ Str::limit($product->description, 110, '...') }}</td>
                    <td>
                        <img src="{{ asset($product->image_description) }}" height="80px">
                    </td>
                    <td>{{ $product->link }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning text-white btn-sm btn-100">
                            <i class="far fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm mt-3 btn-100" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $product->name }}?')">
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
        title: 'Products added successfully!'
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
        title: 'Products edited successfully!'
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
        title: 'Products deleted successfully!'
      })
    });
  </script>
@endif  
@endsection