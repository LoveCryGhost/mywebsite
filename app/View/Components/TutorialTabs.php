<?php
namespace App\View\Components;

use App\Models\Admin\AdminTutorialTab;
use Illuminate\View\Component;

class TutorialTabs extends Component
{

    public function __construct()
    {
        //
    }


    public function render()
    {
        $adminTutorialTabs = AdminTutorialTab::where('guard','admin')->get()->groupby('group_name');
        $_this['adminTutorialTabs'] = $adminTutorialTabs;
        return view('components.tutorial.tabs.index', ['_this'=> $_this]);
    }
}
