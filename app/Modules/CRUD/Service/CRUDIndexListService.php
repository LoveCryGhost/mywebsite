<?php

namespace App\Modules\CRUD\Service;



use App\Modules\CRUD\Handler\RowContainer;

class CRUDIndexListService
{
    public function rowContainer($ctrlitems=[]){
        $this->rowContainer[] = (new RowContainer())->ctrlitems($ctrlitems);
        return $this;
    }

    public function actionButtons($buttons=[]){
        $this->actionButtons = $buttons;
        return $this;
    }
    public function multiCRUDButtons($buttons=[]){
        $this->multiCRUDButtons = $buttons;
        return $this;
    }
}
