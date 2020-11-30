@extends('server.layouts.app')

@section('title')
    Edit Admin
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Admin</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('title-page')
    Edit Admin
@endsection

@section('style')
    <style>
        .btn-footer{
            width: 110px;
        }

        img{
            display: block;
            margin: 5px;
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
                        <h3 class="card-title">Edit Grooth Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $user->name }}"  placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $user->email }}"  placeholder="Enter email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Avatar :</label>

                                    @if($user->avatar)
                                        <img src="{{asset('storage/'.$user->avatar)}}" width="110px" class="image"/>
                                    @else
                                        <img src="{{ asset('backend/dist/img/avatar.png') }}" class="image"  width="110px">
                                    @endif

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                                            <label class="custom-file-label" for="avatar">Choose Image</label>
                                        </div>
                                    </div>
                                    {{-- <div class="small text-secondary">Kosongkan jika tidak mau diisi</div> --}}
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-footer">Back</a>
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