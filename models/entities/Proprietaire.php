<?php

class Proprietaire extends Entity {
    protected $id;
    protected $name;
    protected static $dao = "ProprietaireDAO";
    
    public function __construct ($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}