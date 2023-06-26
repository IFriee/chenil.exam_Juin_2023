<?php

class PrixDAO extends DAO {

    public function __construct() {
        parent::__construct("prix_sejours");
    }


    public function store($prix) {
        $statement = $this->db->prepare("INSERT INTO prix_sejours(Nom, Prix) VALUES (?, ?)");
        return parent::insert($statement, [$prix->nom, $prix->prix], $prix);
    }

    public function update($prix) {
        $statement = $this->db->prepare("UPDATE prix_sejours SET Nom = ?, Prix = ? WHERE Id = ?");
        return parent::insert($statement, [$prix->nom, $prix->prix, $prix->id], $prix);
    }
    
    public function create($data) {
        if (empty($data["Id"])) {
            return false;
        }
        return new Prix(
            $data["Nom"] ?? false,
            $data["Prix"] ?? false,
            $data["Id"] ?? false
        );
    }
}
