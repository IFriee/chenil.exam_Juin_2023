<?php

class ProprietaireDAO extends DAO {

public function __construct () {
    parent::__construct("proprietaires");
}











public function store ($proprietaire) {  
    $statement = $this->db->prepare("INSERT INTO proprietaires (Nom, Prenom, DateNaiss, Email, Tel) VALUES (?, ?, ?, ?, ?)");
    return parent::insert($statement, [$proprietaire->nom, $proprietaire->prenom, $proprietaire->datenaiss, $proprietaire->email, $proprietaire->tel], $proprietaire);
}

public function update($proprietaire) {
    $statement = $this->db->prepare("UPDATE proprietaires SET Nom = ?, Prenom = ?, DateNaiss = ?, Email = ?, Tel = ? WHERE Id = ?");
    return parent::insert($statement, [$proprietaire->nom, $proprietaire->prenom, $proprietaire->datenaiss, $proprietaire->email, $proprietaire->tel, $proprietaire->id], $proprietaire);
}

public function create ($data) {
    if (empty($data["Id"])) {
        return false;
    }
    return new Proprietaire(
        $data["Nom"] ?? false,
        $data["Prenom"] ?? false,
        $data["DateNaiss"] ?? false,
        $data["Email"] ?? false,
        $data["Tel"] ?? false,
        $data["Id"] ?? false
    );
}
}
