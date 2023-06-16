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
        $proprietaires = $proprietaireDAO->fetch_all();
       
        include '../views/animaux/A_create.php';
    }

    
    // affiche le formulaire d'édition
    public function edit ($id) {
        $animal = Animal::find($id);
        if ($animal) {
            return include '../views/animaux/A_edit.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    // sauvegarde un Animal
    
    
    public function update($id, $data) {
        $animal = Animal::find($id);
        if ($animal) {
            // Mise à jour des attributs de l'animal
            $animal->nom = $data["nom"] ?? $animal->nom;
            $animal->sexe = $data["sexe"] ?? $animal->sexe;
            $animal->sterilise = isset($data["sterilise"]) ? $data["sterilise"] : $animal->sterilise;
            $animal->dateNaiss = $data["datenaiss"] ?? $animal->datenaiss;
            $animal->numeroid = $data["numeroid"] ?? $animal->numeroid;
    
    
            $animal->save();
            return include '../views/animaux/A_update.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    public function store ($data) {
        try {
            if ($data && $data["nom"]) {
                $sterilise = isset($data["sterilise"]) ? $data["sterilise"] : false;
                
                
                    // Enregistrer l'animal dans la base de données
            $animal = new Animal($data["nom"], $data['sexe'], $sterilise, $data['datenaiss'], $data['numeroid'],$data['proprietaireid']);
                    $animal->save();
                    return include '../views/animaux/A_store.php';
            } else {
                throw new Exception("Il y a une erreur dans le formulaire.");
            }
        } catch (Exception $e) {
            // Gérer l'erreur
            $errorMessage = $e->getMessage();
            // Afficher un message d'erreur ou rediriger vers une page d'erreur
            // Par exemple:
            return include '../views/error.php';
        }
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
