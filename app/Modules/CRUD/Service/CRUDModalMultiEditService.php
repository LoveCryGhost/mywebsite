<?php

namespace App\Modules\CRUD\Service;



use App\Modules\CRUD\Handler\RowContainer;

class CRUDModalMultiEditService
{
    public function rowContainer($ctrlitems=[]){
        $this->rowContainer[] = (new RowContainer())->ctrlitems($ctrlitems);
        return $this;
    }


}
