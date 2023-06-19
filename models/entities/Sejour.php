<?php

class Sejour extends Entity {

    protected $datedebut;
    protected $datefin;
    protected $animalid;
    protected $id;
    protected static $dao = "SejourDAO";
    
    public function __construct ($datedebut, $datefin, $animalid, $id =  false) {
        $this->datedebut = $datedebut;
        $this->datefin = $datefin;
        $this->animalid = $animalid;
        $this->id = $id;
    }

    public function animal() {
        return $this->belongsTo(Animal::class, 'animalid');
    }
    
}