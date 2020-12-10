@extends('server.layouts.app')

@section('title')
    Add Advantage
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="">Management Advantage</a></li>
    <li class="breadcrumb-item">Advantages</li>
    <li class="breadcrumb-item active">Add</li>
@endsection

@section('title-page')
    Add Advantage
@endsection

@section('style')
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
                        <h3 class="card-title">Add Advantage</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('advantages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control {{ $errors->first('product_id') ? 'is-invalid' : '' }}"  name="product_id" id="product_id">
                                            <option disabled selected>Select a Product</option>
                                            @foreach ($data['products'] as $product)
                                                <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                            @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('product_id') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                            <label class="custom-file-label @error('image') is-invalid @enderror" for="image">Choose image</label>
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
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"  rows="3" placeholder="Enter Desciption">{{ old('description') }}</textarea>

                                     @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('advantages.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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