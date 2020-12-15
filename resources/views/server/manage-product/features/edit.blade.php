@extends('server.layouts.app')

@section('title')
    Edit Feature
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="">Management Feature</a></li>
    <li class="breadcrumb-item">Features</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('title-page')
    Edit Feature
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
                        <h3 class="card-title">Edit Feature</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('features.update', $data['feature']->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control {{ $errors->first('product_id') ? 'is-invalid' : '' }}"  name="product_id" id="product_id">
                                            <option disabled selected>Select a Product</option>
                                            @foreach ($data['products'] as $product)
                                                <option value="{{ $product->id }}" {{ (old('product_id') ?? $product->id )== $data['feature']->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                                            @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('product_id') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>

                                    <img src="{{asset($data['feature']->image)}}" width="100px" class="image img"/>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                            <label class="custom-file-label @error('image') is-invalid @enderror" for="image">Change image</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $data['feature']->name }}"  placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group increment">
                                    <label for="description">Description</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description[]" value="{{ old('description')[0] ?? $data['description'][0] }}"  placeholder="Enter Description">
                                        <div class="input-group-append">
                                            <button type="button"  class="btn btn-outline-primary btn-add">
                                                <i class="fas fa-plus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @if(!empty($data['description']) || old('description'))
                                        @foreach ((old('description') ?? $data['description']) as $description)
                                            @if (($description != (old('description')[0] ?? true) || $description != ($data['description'][0] ?? true)) && $description != null)
                                                <div class="input-group mt-2">
                                                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description[]" value="{{ $description }}"  placeholder="Enter Description">
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
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description[]" placeholder="Enter Description">
                                        <div class="input-group-append">
                                            <button type="button"  class="btn btn-outline-danger btn-remove">
                                                <i class="fas fa-minus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
    
                                @error('description')
                                <span class="small text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('features.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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
@endsection