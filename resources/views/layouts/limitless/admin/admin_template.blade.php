@extends('layouts.app')
@section('app-title')
    @yield('admin-title')
@endsection
@section('app-content')
    <!-- main navbar -->
    @include(config('template.admin.main_navbar'))
    <!-- /main navbar -->



    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include(config('template.admin.main_sidebar'))
        <!-- /main sidebar -->

        <div class="content-wrapper">
            <div class="content-inner">
                <div class="content container pt-0">
                    @yield('admin_template-content')
                </div>
                @include(config('template.admin.footer'))
            </div>
        </div>


    </div>
    <!-- /page content -->


    <!-- Notifications -->
    @include(config('template.admin.notifications'))
    <!-- / Notifications -->
@endsection
