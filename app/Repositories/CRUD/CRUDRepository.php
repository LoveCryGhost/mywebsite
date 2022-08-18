<?php

namespace App\Repositories\CRUD;


class CRUDRepository
{
    public function __construct($masterModelPath, $masterIdName){
        $this->masterModel =new $masterModelPath;
        $this->masterIdName =$masterIdName;

    }
    public function getAllRecords(){
        return $this->masterModel::paginate(10);
    }

    public function getRecordById($masterId){
        return $this->masterModel::find($masterId);
    }

}
