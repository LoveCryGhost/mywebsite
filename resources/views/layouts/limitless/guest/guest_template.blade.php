@extends('layouts.app')
@section('app-title')
    @yield('guest-title')
@endsection
@section('app-content')
    <!-- main navbar -->
    @include(config('template.guest.main_navbar'))
    <!-- /main navbar -->



    <div class="page-content">

        <div class="content-wrapper">
            <div class="content-inner">
                <div class="content container pt-0">
                    @yield('guest_template-content')
                </div>
                @include(config('template.guest.footer'))
            </div>
        </div>


    </div>

@endsection
