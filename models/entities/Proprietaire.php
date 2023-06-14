<?php

class Proprietaire extends Entity {
    protected $id;
    protected $nom;
    protected $prenom;
    protected $datenaiss;
    protected $email;
    protected $tel;
    protected static $dao = "ProprietaireDAO";
    
    public function __construct($id = false, $nom, $prenom, $datenaiss, $email, $tel) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaiss = $datenaiss;
        $this->email = $email;
        $this->tel = $tel;
    }
    
}
