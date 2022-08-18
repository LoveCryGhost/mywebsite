<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin\AdminTutorialTab;

class AdminTutorialTabsController extends AdminCoreController
{

    public function index(){

        $adminTutorialTabs = AdminTutorialTab::where(['guard'=>'admin'])->get()->groupby(['nav1', 'nav2', 'tab1', 'tab2']);
        $_this['adminTutorialTabs'] = $adminTutorialTabs;

        return view('admin.tutorial_tabs.index', ['_this'=>$_this]);
    }

    public function TutorialPost(){
        $adminTutorialTabs = AdminTutorialTab::where('guard','admin')->get()->groupby(['nav1', 'nav2', 'tab1', 'tab2']);
        $_this['adminTutorialTabs'] = $adminTutorialTabs;

        return view('admin.tutorial_tabs.index', ['_this'=>$_this]);
    }
}
