<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserCoreController extends Controller
{

    public $data;
    public  static $toast_update = [
        "heading" => ('default.toast.update_success'),
        "text" =>  '',
        "position" => "top-right",
        "loaderBg" => "#ff6849",
        "icon" => "success",
        "hideAfter" => 3000,
        "stack" => 6
    ];

    public static $toast_store = [
        "heading" => ('default.toast.create_success'),
        "text" =>  '',
        "position" => "top-right",
        "loaderBg" => "#ff6849",
        "icon" => "success",
        "hideAfter" => 3000,
        "stack" => 6
    ];

    public static $toast_destroy = [
        "heading" => ('default.toast.delete_success'),
        "text" =>  '',
        "position" => "top-right",
        "loaderBg" => "#ff6849",
        "icon" => "success",
        "hideAfter" => 3000,
        "stack" => 6
    ];


}
