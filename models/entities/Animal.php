<?php
class Animal extends Entity {
    protected $id;
    protected $nom;
    protected $sexe;
    protected $sterilise;
    protected $datenaiss;
    protected $numeroid;
    protected static $dao = "AnimalDAO";
    
    public function __construct($nom, $sexe, $sterilise, $datenaiss, $numeroid, $id = false) {
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->sterilise = $sterilise;
        $this->datenaiss = $datenaiss;
        $this->numeroid = $numeroid;
        $this->id = $id;
    }
    
}
