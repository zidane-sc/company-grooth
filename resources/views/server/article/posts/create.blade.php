@extends('server.layouts.app')

@section('title')
    Add Post
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="">Article</a></li>
    <li class="breadcrumb-item"><a href="">Posts</a></li>
    <li class="breadcrumb-item active">Add</li>
@endsection

@section('title-page')
    Add Post
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Add Post</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"  placeholder="Enter title">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="thumbnail">Thumbnail</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">
                                                    <label class="custom-file-label @error('thumbnail') is-invalid @enderror" for="thumbnail">Choose Thumbnail</label>
                                                </div>
                                            </div>
                                            @error('thumbnail')
                                                <span class="small text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label for="" class="">Status: </label>
                                    <div class="icheck-primary d-inline ml-3">
                                      <input type="radio" id="drafted" name="status" value="DRAFTED" {{ old('status') == 'DRAFTED' ? 'checked' : '' }}>
                                      <label for="drafted" class="font-weight-normal">Drafted</label>
                                    </div>
                                    <div class="icheck-primary d-inline ml-3">
                                      <input type="radio" id="published" name="status" value="PUBLISHED" {{ old('status') == 'PUBLISHED' ? 'checked' : '' }}>
                                      <label for="published" class="font-weight-normal" >Published</label>
                                    </div>
                                    @error('status')
                                        <div class="small text-danger">
                                            {{ $errors->first('status') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <div class="select2-purple">
                                                <select class="select2" name="tags_id[]" id="tags_id"  multiple="multiple" data-placeholder="Select a Tags" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                    @empty(old('tags_id'))
                                                        @foreach ($data['tags'] as $tag)
                                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                        @endforeach
                                                    @else
                                                    @foreach ($data['tags'] as $tag)
                                                        @foreach (old('tags_id') as $item)
                                                            @if ($item == $tag->id)
                                                                <option value="{{ $tag->id }}" selected>{{ $tag->name }}</option>
                                                                @php
                                                                    continue 2;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                    @endforeach
                                                    @endempty
                                                </select>
                                            </div>
                                            @error('tags_id')
                                                <div class="small text-danger">
                                                    {{ $errors->first('tags_id') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control {{ $errors->first('category_id') ? 'is-invalid' : '' }}"  name="category_id" id="category_id">
                                                    <option disabled selected>Select a Category</option>
                                                    @foreach ($data['categories'] as $category)
                                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('category_id') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"  rows="3" placeholder="Enter Desciption">{{ old('content') }}</textarea>

                                     @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Save</button>
                                <a href="{{ route('teams.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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
    <script src="{{ asset('backend/dist/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
      var content = document.getElementById("content");
        CKEDITOR.replace(content,{
        language:'en'
      });
      CKEDITOR.config.allowedContent = true;
    </script>

    <script>
    $(function () {
        $('.select2').select2();

        bsCustomFileInput.init();
    });
    </script>
  
@endsection