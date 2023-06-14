<?php
class AnimalController {
    // liste les animaux
    public function index() {
        $animaux = Animal::all();
        include '../views/animaux/A_list.php';
    }
    
// affiche le formulaire de création
    public function create() {
    $proprietaireDAO = new ProprietaireDAO();
    $ids = $proprietaireDAO->getAllIds();

    include '../views/animaux/A_create.php';
    }


    
    // affiche le formulaire d'édition
    public function edit($id) {
        $animal = Animal::find($id);
        if ($animal) {
            return include '../views/animaux/A_edit.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    // sauvegarde un Animal
    public function store($data) {
        if ($data && $data["nom"]) {
            $sterilise = isset($data["sterilise"]) ? $data["sterilise"] : false;
            $animal = new Animal($data["nom"], $data['sexe'], $sterilise, $data['datenaiss'], $data['numeroid'],$data['proprietaireid']);
            $animal->save();
            return include '../views/animaux/A_store.php';
        }
    }
    
    // met à jour un animal
    public function update($id, $data) {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->nom = $data["nom"] ?? $animal->nom;
            $animal->sexe = $data["sexe"] ?? $animal->sexe;
            $animal->sterilise = isset($data["sterilise"]) ? $data["sterilise"] : $animal->sterilise;
            $animal->dateNaiss = $data["datenaiss"] ?? $animal->datenaiss;
            $animal->numeroid = $data["numeroid"] ?? $animal->numeroid;
            $animal->proprietaireid =$data['proprietaireid'] ?? $animal->proprietaireid;

            $animal->save();
            return include '../views/animaux/A_update.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    // supprime un animal
    public function destroy($id) {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
            return include '../views/animaux/A_delete.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
}
