<?php
class Prix extends Entity {
  
    protected $nom;
    protected $prix;
    protected $id;

    protected static $dao = "PrixDAO";
    
    public function __construct($nom, $prix, $id = false) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->id = $id;
    }
   
    public function animaux() {
        return $this->hasMany(Animal::class, 'prixsejourid','id');
    }
}




