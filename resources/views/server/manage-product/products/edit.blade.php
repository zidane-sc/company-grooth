@extends('server.layouts.app')

@section('title')
    Edit Product
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="">Management Product</a></li>
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('title-page')
    Edit Product
@endsection

@section('style')
    <style>
        .btn-footer{
            width: 110px;
        }

        .img{
            display: block;
            margin: 10px 0;
        }

        .block{
            display: block;
            margin-bottom: 10px;
            color: red;
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
                        <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="banner">Banner</label>

                                    <img src="{{asset($product->banner)}}" width="100px" class="image img"/>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('banner') is-invalid @enderror" id="banner" name="banner">
                                            <label class="custom-file-label @error('banner') is-invalid @enderror" for="banner">Change Banner</label>
                                        </div>
                                    </div>
                                    @error('banner')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $product->name }}"  placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"  rows="3" placeholder="Enter Desciption">{{ old('description') ?? $product->description }}</textarea>

                                     @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image_description">Image Desciption</label>

                                    <img src="{{asset($product->image_description)}}" width="100px" class="image img"/>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image_description') is-invalid @enderror" id="image_description" name="image_description">
                                            <label class="custom-file-label @error('image_description') is-invalid @enderror" for="image_description">Change Image Description</label>
                                        </div>
                                    </div>
                                    @error('image_description')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') ?? $product->link }}"  placeholder="Enter Link">
                                    @error('link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('products.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')
    <script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script>
    $(function () {
        bsCustomFileInput.init();
    });
    </script>
@endsection