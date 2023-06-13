<?php

class ProprietaireDAO extends DAO {

    public function __construct () {
        parent::__construct("proprietaires");
    }
    
    public function store ($student) {
        $statement = $this->db->prepare("INSERT INTO proprietaires (name) VALUES (?)");
        return parent::insert($statement, [$student->name], $student);
    }
    
    public function update($student) {
        $statement = $this->db->prepare("UPDATE proprietaires SET name = ? WHERE id = ?");
        return parent::insert($statement, [$student->name, $student->id], $student);
    }
    
    public function create ($data) {
        if (empty($data["id"])) {
            return false;
        }
        return new Proprietaire(
            $data["id"] ?? false,
            $data["name"] ?? false
        );
    }
}