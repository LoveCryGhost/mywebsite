<?php

namespace App\Modules\CRUD\Service;

use phpDocumentor\Reflection\Types\Object_;

class CRUDService
{
    public function __construct($guard = 'admin', $routeName = 'routeName', $viewName = 'viewName')
    {

        $routeView = [
            "index",
            //"edit", "update",
            "create", "store",
            //"destroy",

            //Master-Multi
            "MultiEdit" => "multiEdit",
            "MultiUpdate" => "multiUpdate",
            "MultiCreate" => "multiCreate",
            "MultiStore" => "multiStore",
            "MultiPrint" => "multiPrint",
            "MultiDestroy" => "multiDestroy",

            //Master-Multi Modal
            "ModalMultiEdit" => "modalMultiEdit",
            "ModalMultiUpdate" => "modalMultiUpdate",
            "ModalMultiCreate" => "modalMultiCreate",
            "ModalMultiStore" => "modalMultiStore",
            "ModalMultiDestroy" => "modalMultiDestroy",

            "ModalCreate" => "modalCreate",
            "ModalStore" => "modalStore",

        ];
        $this->routeName = new Object_();
        foreach ($routeView as $route){
            $this->routeName->$route = $guard.'.'.$routeName.'.'.$route;
        }

        $this->routes = new Object_();
        foreach ($routeView as $route){
            $this->routes->$route = route($guard.'.'.$routeName.'.'.$route);
        }

        $this->views = new Object_();
        foreach ($routeView as $view){
            $this->views->$view = $guard.'.'.$routeName.'.'.$view;
        }


    }

    public function indexSearch(){
        $this->indexSearch =  new CRUDIndexSearchService();
        return $this->indexSearch;
    }

    public function indexSortable(){
        $this->indexSortable =  new CRUDIndexSortableService();
        return $this->indexSortable;
    }

    public function indexList(){
        $this->indexList =  new CRUDIndexListService();
        return $this->indexList;
    }

    public function modalMultiEdit(){
        $this->modalMultiEdit =  new CRUDModalMultiEditService();
        return $this->modalMultiEdit;
    }

    public function modalMultiCreate(){
        $this->modalMultiCreate =  new CRUDModalMultiEditService();
        return $this->modalMultiCreate;
    }

    public function edit(){

    }

    public function editTabs(){

    }

    public function create(){

    }


}
