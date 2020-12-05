@extends('server.layouts.app')

@section('title')
    Add Section Two
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('section-two.index') }}">Management Website</a></li>
    <li class="breadcrumb-item"><a href="{{ route('section-two.index') }}">Section Two</a></li>
    <li class="breadcrumb-item active">Add</li>
@endsection

@section('title-page')
    Add Section Two
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
                        <h3 class="card-title">Add Section Two</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('section-two.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                            <label class="custom-file-label @error('image') is-invalid @enderror" for="image">Choose Image</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="small text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"  placeholder="Enter Title">
                                    @error('title')
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
                                <a href="{{ route('section-two.index') }}" class="btn btn-secondary btn-footer">Back</a>
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