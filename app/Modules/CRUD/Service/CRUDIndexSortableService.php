<?php

namespace App\Modules\CRUD\Service;



use App\Modules\CRUD\Handler\RowContainer;

class CRUDIndexSortableService
{

    public function rowContainer($ctrlitems=[]){
        $this->rowContainer[] = (new RowContainer())->ctrlitems($ctrlitems);
        return $this;
    }

}
