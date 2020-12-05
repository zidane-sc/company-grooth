@extends('server.layouts.app')

@section('title')
    Add Category
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Article</a></li>
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category</a></li>
    <li class="breadcrumb-item active">Add</li>
@endsection

@section('title-page')
    Add Category
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
                        <h3 class="card-title">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  placeholder="Enter Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-footer">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')

@endsection