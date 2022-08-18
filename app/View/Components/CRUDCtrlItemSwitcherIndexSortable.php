<?php
namespace App\View\Components;

use Illuminate\View\Component;

class CRUDCtrlItemSwitcherIndexSortable extends Component
{

    public $ctrlitem ;
    public $options ;
    public function __construct($ctrlitem, $options=[])
    {
        $this->ctrlitem = $ctrlitem;
        $this->options = $options;
    }

    public function render()
    {
        switch ($ctrltype = $this->ctrlitem->ctrltype){
            case "textbox":
                $viewBlade = "textbox";
                break;
        }

        return view('components.crud.index_sortable.'.$viewBlade, ['ctrlitem'=>$this->ctrlitem]);
        //return view('components.crud.crud_ctrlitem_switcher');
    }
}
