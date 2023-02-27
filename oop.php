<?php
class person{
    public $Name;
    public $Email;
    public function setName($Name){
        $this->Name=$Name;
    }
//    public function setEmail(){
//
//    }
    public function getName(){
        return $this->name;

    }
//    public function getEmail(){
//
//    }

}

$obj = new person();
echo $obj->setName('Halima');
//echo $obj->setName();
