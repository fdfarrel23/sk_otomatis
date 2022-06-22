<?php

class Pegawai_Model{
    public $id;
    public $name;

    public function __construct($id,$name){
        $this->id = $id;  
        $this->name = $name;
    }
}

?>