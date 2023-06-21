<?php

class AnimalDAO extends DAO {

    public function __construct() {
        parent::__construct("animaux");
    }


    public function store($animal) {
        $statement = $this->db->prepare("INSERT INTO animaux (Nom, Sexe, Sterilise, DateNaiss, NumeroId, ProprietaireId) VALUES (?, ?, ?, ?, ?, ?)");
        return parent::insert($statement, [$animal->nom, $animal->sexe, $animal->sterilise, $animal->datenaiss, $animal->numeroid, $animal->proprietaireid], $animal);
    }
    
    public function update($animal) {
        $statement = $this->db->prepare("UPDATE animaux SET Nom = ?, Sexe = ?, Sterilise = ?, DateNaiss = ?, NumeroId = ?, ProprietaireId = ? WHERE Id = ?");
        return parent::execute($statement, [$animal->nom, $animal->sexe, $animal->sterilise, $animal->datenaiss, $animal->numeroid, $animal->proprietaireid, $animal->id]);
    }    
    
    public function create($data) {
        if (empty($data["Id"])) {
            return false;
        }
        return new Animal(
            $data["Nom"] ?? false,
            $data["Sexe"] ?? false,
            $data["Sterilise"] ?? false,
            $data["DateNaiss"] ?? false,
            $data["NumeroId"] ?? false,
            $data["ProprietaireId"] ?? false,
            $data["Id"] ?? false
        );
    }
}
