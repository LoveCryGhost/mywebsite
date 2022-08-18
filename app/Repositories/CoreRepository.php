<?php

namespace App\Repositories;


class CoreRepository
{
    public function query(object $request, string $modelPath, array $withRelationModels=[]){
        return $query = new $modelPath();
    }
}
