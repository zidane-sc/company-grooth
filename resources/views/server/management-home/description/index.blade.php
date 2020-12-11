@extends('server.layouts.app')

@section('title')
    Description
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Management Home</a></li>
    <li class="breadcrumb-item active">Description</li>
@endsection

@section('title-page')
    Description
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <style>
        .btn-footer{
            width: 110px;
        }
        
        .img{
            display: block;
            margin: 10px;
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Change Description</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ ($data) ? route('description.update', $data->id) : route('description.store')  }}" method="POST" enctype="multipart/form-data">
                            @if ($data)
                                @method('patch')                        
                            @endif
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Image :</label>
                                    @if($data && $data->image)
                                        <img src="{{asset('storage/'.$data->image)}}" width="170px" class="image img"/>
                                    @else
                                        <span class="block">No Image</span>
                                    @endif

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                            <label class="custom-file-label @error('image') is-invalid @enderror" for="image">Change Image</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"  rows="3" placeholder="Enter Description">{{ old('description') ?? ($data->description ?? "") }}</textarea>

                                     @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Change</button>
                                <a href="{{ route('description.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script>
    $(function () {
    bsCustomFileInput.init();
});
</script>

@if (session('change'))
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
            title: 'Description changed successfully!'
        })
    });
</script>
@endif    
@endsection