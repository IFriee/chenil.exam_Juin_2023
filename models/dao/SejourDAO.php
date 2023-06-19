<?php

class SejourDAO extends DAO {

public function __construct () {
    parent::__construct("sejours");
}





public function store ($sejour) {  
    $statement = $this->db->prepare("INSERT INTO sejours (DateDebut, DateFin, AnimalId) VALUES (?, ?, ?)");
    return parent::insert($statement, [$sejour->datedebut, $sejour->datefin, $sejour->animalid], $sejour);
}

public function update($sejour) {
    $statement = $this->db->prepare("UPDATE sejours SET DateDebut = ?, DateFin = ?, AnimalId = ?WHERE Id = ?");
    return parent::insert($statement, [$sejour->datedebut, $sejour->datefin, $sejour->animalid, $sejour->id], $sejour);
}

public function create ($data) {
    if (empty($data["Id"])) {
        return false;
    }
    return new Sejour(
        $data["DateDebut"] ?? false,
        $data["DateFin"] ?? false,
        $data["AnimalId"] ?? false,
        $data["Id"] ?? false
    );
}
}
