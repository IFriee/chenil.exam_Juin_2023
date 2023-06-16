<?php

class Proprietaire extends Entity {

    protected $nom;
    protected $prenom;
    protected $datenaiss;
    protected $email;
    protected $tel;
    protected $id;
    protected static $dao = "ProprietaireDAO";
    
    public function __construct( $nom, $prenom, $datenaiss, $email, $tel, $id = false) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaiss = $datenaiss;
        $this->email = $email;
        $this->tel = $tel;
        $this->id = $id;
    }
    
//relations

    public function animaux() {
        return $this->hasMany(Animal::class, 'proprietaireid', 'id');
    }


}
