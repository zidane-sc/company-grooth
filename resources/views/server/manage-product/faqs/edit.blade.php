@extends('server.layouts.app')

@section('title')
    Edit Faq
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="">Management Faq</a></li>
    <li class="breadcrumb-item">Faqs</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('title-page')
    Edit Faq
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
                        <h3 class="card-title">Edit Faq</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('faqs.update', $data['faq']->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control {{ $errors->first('product_id') ? 'is-invalid' : '' }}"  name="product_id" id="product_id">
                                            <option disabled selected>Select a Product</option>
                                            @foreach ($data['products'] as $product)
                                                <option value="{{ $product->id }}" {{ (old('product_id') ?? $product->id) == $data['faq']->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                            @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('product_id') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question" value="{{ old('question') ?? $data['faq']->question }}"  placeholder="Enter Question">
                                    @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"  rows="3" placeholder="Enter Answer">{{ old('answer') ?? $data['faq']->answer }}</textarea>

                                     @error('answer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('faqs.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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