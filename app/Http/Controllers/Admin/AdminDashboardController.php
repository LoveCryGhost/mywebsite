<?php

namespace App\Http\Controllers\Admin;


class AdminDashboardController extends AdminCoreController
{

    public function index(){
        return view("admin.dashboard.index",["_this"=>$this]);
    }
}
