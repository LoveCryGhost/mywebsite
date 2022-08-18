<?php

namespace App\Modules\CRUD\Handler;




class Textbox
{
    public $ctrltype;
    public $name;
    public $value;
    public $label =null;

    public $placeholder = null;
    public $defaultValue = null;
    public $forceValue = null;

    public $crud;
    public $class="form-control";


    public $readOnly = null;
    public $disabled = null;

    //public $tags;
    public $prepend = null;
    public $append = null;
    public $prepend2 = null;
    public $append2 = null;

    public $fuzzySearch = null;
    public $validations = null;

    public function __construct($name="", $value="", $crud="indexSearch", $label=null){
        $this->ctrltype = "textbox";
        $this->name = $name;
        $this->value = $value;
        $this->crud = $crud;
        $this->label = $label;
    }

    public function tags($prepend=null, $append=null, $prepend2=null, $append2=null){
        $this->prepend = $prepend;
        $this->append = $append;
        $this->prepend2 = $prepend2;
        $this->append2 = $append2;
        return $this;
    }

    public function placeholder($placeholder=""){
        $this->placeholder = $placeholder;
        return $this;
    }

    public function class($classes=[]){
        $this->class = "form-control";
        if(is_array($classes)){
            foreach ($classes as $class){
                $this->class=$this->class.' '.$class;
            }
        }
        return $this;
    }

    public function forceValue($forceValue = null){
        $this->forceValue = $forceValue;
        return $this;
    }

    public function defaultValue($defaultValue = null){
        $this->defaultValue= $defaultValue;
        return $this;
    }
    public function readOnly($readOnly = true){
        $this->readOnly = $readOnly;
        return $this;
    }
    public function disabled($disabled=true){
        $this->disabled = $disabled;
        return $this;
    }

    public function fuzzySearch($fuzzySearch=true){
        $this->fuzzySearch = $fuzzySearch;
        return $this;
    }
    public function validations($validations=null){
        $this->validations = $validations;
        return $this;
    }

}
