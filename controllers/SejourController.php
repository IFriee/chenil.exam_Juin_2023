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
    public function store($data){

        $errors =[];
        if ($data && $data["datedebut"] && $data["datefin"]) {
            $datedebut = new DateTime($data["datedebut"]);
            $datefin = new DateTime($data["datefin"]);
            
            $now = new DateTime();
            if ($datedebut < $now || $datefin < $now) {
                $errors["datedebut"] = "La date de début et la date de fin ne peuvent pas être dans le passé.";
            }
            if ($datedebut >= $datefin) {
                $errors["datedebut"] = "La date de début doit être antérieure à la date de fin.";
            }
            if (!empty($errors)) {
                $animalDAO = new AnimalDAO();
                $animaux = $animalDAO->fetch_all();
                include '../views/layout/top.php';
                include '../views/sejours/S_create.php';
                return;
            }
            
            $sejour = new Sejour($data["datedebut"], $data["datefin"], $data["animalid"]);
            $sejour->save();
            
            return include '../views/sejours/S_store.php';
        }
    }
    
    
    //met a jour un sejour
    public function update($id, $data)
    {
        $sejour = Sejour::find($id);
        if ($sejour) {
            if ($data && $data["datedebut"] && $data["datefin"]) {
                $datedebut = new DateTime($data["datedebut"]);
                $datefin = new DateTime($data["datefin"]);
                $now = new DateTime();
                if ($datedebut < $now || $datefin < $now) {
                    $errors["datedebut"] = "La date de début et la date de fin ne peuvent pas être dans le passé.";
                }               
                if ($datedebut >= $datefin) {
                    $errors["datedebut"] = "La date de début doit être antérieure à la date de fin.";
                }
                
                // Si erreurs 
                if (!empty($errors)) {
                    $animalDAO = new AnimalDAO();
                    $animaux = $animalDAO->fetch_all();
                    include '../views/layout/top.php';
                    include '../views/sejours/S_update.php';
                    return;
                }
                
                $sejour->datedebut = $data["datedebut"];
                $sejour->datefin = $data["datefin"];
                $sejour->animalid = isset($data["animalid"]) ? $data["animalid"] : $sejour->animalid;
            }
            
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