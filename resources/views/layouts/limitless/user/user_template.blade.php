@extends('layouts.app')

@section('app-title')
    @yield('user-title')
@endsection

@section('app-content')
    <!-- main navbar -->
    @include(config('template.user.main_navbar'))
    <!-- /main navbar -->

    <div class="page-content">
        <div class="content-wrapper">
            <div class="content-inner">
                <div class="content container pt-0">
                    @yield('user-content')
                </div>
                @include(config('template.user.footer'))
            </div>
        </div>


    </div>

@endsection
