<?php

namespace App\Modules\CRUD\Handler;




class RowContainer
{

    public function ctrlitems( $ctrlitems=[]){
        $this->ctrlitems = $ctrlitems;
        return $this;
    }
}
