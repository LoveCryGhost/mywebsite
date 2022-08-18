<?php

namespace App\Modules\CRUD\Service;



use App\Modules\CRUD\Handler\RowContainer;

class CRUDIndexSearchService
{

    public function rowContainer($ctrlitems=[]){
        $this->rowContainer[] = (new RowContainer())->ctrlitems($ctrlitems);
        return $this;
    }


}
