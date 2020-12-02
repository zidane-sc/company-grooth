@extends('server.layouts.app')

@section('title')
    Visi Misi
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Management Website</a></li>
    <li class="breadcrumb-item active">Visi & Misi</li>
@endsection

@section('title-page')
    Visi & Misi
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <style>
        .btn-footer{
            width: 110px;
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
                        <h3 class="card-title">Change Visi & Misi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ ($data) ? route('visi-misi.update', $data->id) : route('visi-misi.store')  }}" method="POST" enctype="multipart/form-data">
                            @if ($data)
                                @method('patch')                        
                            @endif
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image_visi">Visi Image :</label>
                                    @if($data && $data->image_visi)
                                        <img src="{{asset('storage/'.$data->image_visi)}}" width="170px" class="image"/>
                                    @else
                                        <span class="block">No Image</span>
                                    @endif

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image_visi') is-invalid @enderror" id="image_visi" name="image_visi">
                                            <label class="custom-file-label @error('image_visi') is-invalid @enderror" for="image">Change Visi Image</label>
                                        </div>
                                    </div>
                                    @error('image_visi')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea class="form-control @error('visi') is-invalid @enderror"  id="visi" name="visi" rows="3">{{ old('visi') ?? ($data->visi ?? "") }}</textarea>

                                     @error('visi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image_misi">Misi Image :</label>
                                    @if($data && $data->image_misi)
                                        <img src="{{asset('storage/'.$data->image_misi)}}" width="170px" class="image"/>
                                    @else
                                        <span class="block">No Image</span>
                                    @endif

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image_misi') is-invalid @enderror" id="image_misi" name="image_misi">
                                            <label class="custom-file-label @error('image_misi') is-invalid @enderror" for="image">Change Misi Image</label>
                                        </div>
                                    </div>
                                    @error('image_misi')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="misi">Misi</label>
                                    <textarea class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi"  rows="3">{{ old('misi') ?? ($data->misi ?? "") }}</textarea>

                                     @error('misi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Change</button>
                                <a href="{{ route('visi-misi.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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
            title: 'Visi And Misi changed successfully!'
        })
    });
</script>
@endif    
@endsection