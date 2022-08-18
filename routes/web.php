<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('guest.dashboard.index');
    //return view('welcome_layout_6_3_side_bar');
});

@include('route_auth.php');

@include('route_user.php');
@include('route_admin.php');
