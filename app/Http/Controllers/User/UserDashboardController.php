<?php

namespace App\Http\Controllers\User;


class UserDashboardController extends UserCoreController
{

    public function index(){
        return view("user.dashboard.index",["_this"=>$this]);
    }
}
