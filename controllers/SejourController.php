<?php

class SejourController {
    //liste les sejours
    public function index ($sejour) {
        $sejours = Sejour::all();
        include '../views/sejours/S_list.php';
    }
    

    
    //affiche le formulaire de création
    public function create () {
        $animalDAO = new AnimalDAO();
        $animaux = $animalDAO->fetch_all();
        return include '../views/sejours/S_create.php';
    }
    
    //affiche le formulaire d'édition
    public function edit ($id) {
        $sejour = Sejour::find($id);
        if ($sejour) {
            $animalDAO = new AnimalDAO();
            $animaux = $animalDAO->fetch_all();
            return include '../views/sejours/S_edit.php';
        }
        return include '../views/sejours/S_notfound.php';
    }
    
    //sauvegarde un sejour
    public function store ($data) {
        if ($data && $data["datedebut"]) {
            $sejour = new Sejour($data["datedebut"], $data['datefin'], $data['animalid']);
            $sejour->save();
            return include '../views/sejours/S_store.php';
        }
        
    }
    
    //met a jour un sejour
    public function update ($id, $data) {
        $sejour = Sejour::find($id);
        if ($sejour) {
            $sejour->datedebut = $data["datedebut"] ? $data["datedebut"] : $sejour->datedebut;
            $sejour->datefin = $data["datefin"] ? $data["datefin"] : $sejour->datefin;
            $sejour->animalid = isset($data["animalid"]) ? $data["animalid"] : $sejour->animalid;


            $sejour->save();
            return include '../views/sejours/S_update.php';
        }
        return include '../views/sejours/S_notfound.php';
    }
    
    //suppr un sejour
    public function destroy ($id) {
        $sejour = sejour::find($id);
        if ($sejour) {
            $sejour->delete();
            return include '../views/sejours/S_delete.php';
        }
        return include '../views/sejours/S_notfound.php';
    }





}