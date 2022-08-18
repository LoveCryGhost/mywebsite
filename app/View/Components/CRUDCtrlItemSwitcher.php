<?php
namespace App\View\Components;

use Illuminate\View\Component;

class CRUDCtrlItemSwitcher extends Component
{

    public $row ;
    public $ctrlitem ;
    public $options ;
    public function __construct($row, $ctrlitem, $options=[])
    {
        $this->row = $row;
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

        return view('components.crud.ctrlitems.'.$viewBlade, ['row' => $this->row ,'ctrlitem'=>$this->ctrlitem]);
        //return view('components.crud.crud_ctrlitem_switcher');
    }
}
