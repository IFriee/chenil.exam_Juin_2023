<?php

class Sejour extends Entity {
    protected $id;
    protected $name;
    protected static $dao = "SejourDAO";
    
    public function __construct ($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}