<?php
class Animal extends Entity {
    protected $id;
    protected $nom;
    protected $sexe;
    protected $sterilise;
    protected $dateNaiss;
    protected $numeroId;
    protected static $dao = "AnimalDAO";
    
    public function __construct($id = false, $nom, $sexe, $sterilise, $dateNaiss, $numeroId) {
        $this->id = $id;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->sterilise = $sterilise;
        $this->dateNaiss = $dateNaiss;
        $this->numeroId = $numeroId;
    }
    
}
