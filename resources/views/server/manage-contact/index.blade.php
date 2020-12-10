@extends('server.layouts.app')

@section('title')
    Contact
@endsection

@section('breadcumb-active')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Management Contact</a></li>
    <li class="breadcrumb-item active">Contact</li>
@endsection

@section('title-page')
    Contact
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>

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
                        <h3 class="card-title">Change Contact</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ ($data) ? route('contact.update', $data->id) : route('contact.store')  }}" method="POST" enctype="multipart/form-data">
                            @if ($data)
                                @method('patch')                        
                            @endif
                            @csrf

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address"  rows="3" placeholder="Enter Address">{{ old('address') ?? ($data->address ?? "") }}</textarea>

                                     @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <div id="here-maps">
                                    <label for="">Choose Location</label>
                                    <div id="mapContainer" class="h-100" style="height: 500px!important; margin-bottom: 2rem;"></div>
                                </div> --}}

                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" value="{{ old('latitude') ?? ($data->latitude ?? "") }}"  placeholder="Enter Latitude">
        
                                             @error('latitude')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" value="{{ old('longitude') ?? ($data->longitude ?? "") }}"  placeholder="Enter Longitude">
        
                                             @error('longitude')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') ?? ($data->phone ?? "") }}"  placeholder="Enter Phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') ?? ($data->whatsapp ?? "") }}"  placeholder="Enter whatsapp">

                                        @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? ($data->email ?? "") }}"  placeholder="Enter Email">

                                     @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="link_maps">Link Maps</label>
                                    <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" name="link_maps" value="{{ old('link_maps') ?? ($data->link_maps ?? "") }}"  placeholder="Enter Link Maps">
                                    @error('link_maps')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-footer">Change</button>
                                <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-footer">Cancel</a>
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
{{-- <script>
    window.hereApiKey = "{{ env('HERE_API_KEY') }}";
    window.action = "submit";
</script>
<script src="{{ asset('backend/dist/js/here.js') }}"></script> --}}

<script>
    $(function () {
    bsCustomFileInput.init();
});
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
            title: 'Contact changed successfully!'
        })
    });
</script>
@endif    
@endsection