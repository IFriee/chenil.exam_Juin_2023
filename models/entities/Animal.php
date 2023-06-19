<?php
class Animal extends Entity {
  
    protected $nom;
    protected $sexe;
    protected $sterilise;
    protected $datenaiss;
    protected $numeroid;
    protected $proprietaireid;
    protected $id;
    protected static $dao = "AnimalDAO";
    
    public function __construct($nom, $sexe, $sterilise, $datenaiss, $numeroid, $proprietaireid, $id = false) {
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->sterilise = $sterilise;
        $this->datenaiss = $datenaiss;
        $this->numeroid = $numeroid;
        $this->proprietaireid = $proprietaireid;
        $this->id = $id;
    }
   
    //Les relations Onetomany
    public function proprietaire() {
        return $this->belongsTo(Proprietaire::class, 'proprietaireid');
    }
    

    public function sejour() {
        return $this->hasMany(Sejour::class, 'animalid', 'id');
    }














}
