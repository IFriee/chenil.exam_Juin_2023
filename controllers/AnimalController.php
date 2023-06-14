<?php

class AnimalController {
    //liste les animaux
    public function index () {
        $animaux = Animal::all();
        include '../views/animaux/A_list.php';
    }
    
    
    //affiche le formulaire de création
    public function create () {
        return include '../views/animaux/A_create.php';
    }
    
    //affiche le formulaire d'édition
    public function edit ($id) {
        $animal = Animal::find($id);
        if ($animal) {
            return include '../views/animaux/A_edit.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    //sauvegarde un Animal
    public function store ($data) {
        if ($data && $data["nom"]) {
            $sterilise = isset($data["sterilise"]) ? $data["sterilise"] : false;
            $animal = new Animal($data["nom"], $data['sexe'], $sterilise, $data['datenaiss'], $data['numeroid']);
                        $animal->save();
            return include '../views/animaux/A_store.php';
        }
        
    }
    
    //met a jour un animal
    public function update ($id, $data) {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->nom = $data["nom"] ? $data["nom"] : $animal->nom;
            $animal->sexe = $data["sexe"] ? $data["sexe"] : $animal->sexe;
            $animal->sterilise = isset($data["sterilise"]) ? $data["sterilise"] : $animal->sterilise;
            $animal->dateNaiss = $data["dateNaiss"] ? $data["dateNaiss"] : $animal->dateNaiss;
            $animal->numeroId = $data["numeroId"] ? $data["numeroId"] : $animal->numeroId;

            $animal->save();
            return include '../views/animaux/A_update.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    //suppr un animal
    public function destroy ($id) {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
            return include '../views/animaux/A_delete.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
}