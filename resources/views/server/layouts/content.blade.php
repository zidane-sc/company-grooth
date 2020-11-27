<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@yield('title-page')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @yield('breadcumb-active')
                    {{-- <li class="breadcrumb-item active">Blank Page</li> --}}
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">

    <!-- Default box -->
    @yield('content')
    <!-- /.card -->

</section>