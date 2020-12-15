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
                        <h3 class="card-title">Change Visi & Misi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ ($data['visi']) ? route('visi-misi.update', $data['visi']->id) : route('visi-misi.store')  }}" method="POST" enctype="multipart/form-data">
                            @if ($data['visi'])
                                @method('patch')                        
                            @endif
                            @csrf

                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea class="form-control @error('visi') is-invalid @enderror"  id="visi" name="visi" rows="3">{{ old('visi') ?? ($data['visi']->visi ?? "") }}</textarea>

                                     @error('visi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group increment">
                                    <label for="misi">Misi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi[]" value="{{ old('misi')[0] ?? ($data['misi'][0] ?? "") }}"  placeholder="Enter Misi">
                                        <div class="input-group-append">
                                            <button type="button"  class="btn btn-outline-primary btn-add">
                                                <i class="fas fa-plus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @if(!empty($data['misi']) || old('misi'))
                                    @foreach ((old('misi') ?? $data['misi']) as $misi)
                                            @if (($misi != (old('misi')[0] ?? true) || $misi != ($data['misi'][0] ?? true)) && $misi != null)
                                                <div class="input-group mt-2">
                                                    <input type="text" class="form-control @error('misi') is-invalid @enderror" name="misi[]" value="{{ $misi }}"  placeholder="Enter Misi">
                                                    <div class="input-group-append">
                                                        <button type="button"  class="btn btn-outline-danger btn-remove">
                                                            <i class="fas fa-minus-square"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>

                                <div class="clone invisible">
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control @error('misi') is-invalid @enderror" name="misi[]" placeholder="Enter Misi">
                                        <div class="input-group-append">
                                            <button type="button"  class="btn btn-outline-danger btn-remove">
                                                <i class="fas fa-minus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
    
                                @error('misi')
                                <span class="small text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
<script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script>
    $(function () {
    bsCustomFileInput.init();
});

$(document).ready(function () {
    $(".btn-add").click(function () {
        let markup = $(".invisible").html();
        $(".increment").append(markup);
    });
    $("body").on("click", ".btn-remove", function () {
        $(this).parents(".input-group").remove();
    })
})
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
            title: 'Visi And Misi changed successfully!'
        })
    });
</script>
@endif    
@endsection