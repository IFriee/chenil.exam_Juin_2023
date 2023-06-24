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
    public function edit($id) {
        $animal = Animal::find($id);
        if ($animal) {
            $proprietaireDAO = new ProprietaireDAO();
            $proprietaires = $proprietaireDAO->fetch_all();
            return include '../views/animaux/A_edit.php';
        }
        return include '../views/animaux/A_notfound.php';
    }
    
    
    // sauvegarde un Animal
    
    
    public function update($id, $data) {

        $animal = Animal::find($id);
        if ($animal) {
            $errors = [];
            $currentDate = new DateTime();
            $dateNaiss = DateTime::createFromFormat('Y-m-d', $data["datenaiss"]);

            if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["nom"])) {
                $errors["nom"] = "Le nom doit commencer par une majuscule et ne doit contenir que des lettres.";
            }
            if (!preg_match('/^[a-zA-Z]*$/', $data["sexe"])) {
                $errors["sexe"] = "Le sexe ne doit contenir que des lettres.";
            }
            if (!isset($data["sterilise"]) || ($data["sterilise"] != "1" && $data["sterilise"] != "0")) {
                $errors["sterilise"] = "La valeur du champ 'sterilise' doit être soit '1' (oui) ou '0' (non).";
            }
            if (!$dateNaiss) {
                $errors["datenaiss"] = "Le champ 'datenaiss' doit être au format 'Y-m-d' (ex : 2023-06-13).";
            if ($dateNaiss > $currentDate) {
                $errors["datenaiss"] = "La date de naissance ne peut pas être dans le futur.";
                }
            } else {
                $diff = $dateNaiss->diff($currentDate);
                if ($diff->y > 40) {
                    $errors["datenaiss"] = "Votre animal ne peut pas être empaillé, veuillez rentrer une date inférieure à 40 ans.";
                }
            }
   
            if (!preg_match('/^[0-9]*$/', $data["numeroid"])) {
                $errors["numeroid"] = "Le champ 'numeroid' ne doit contenir que des chiffres.";
            }
    
            if (count($errors) > 0) {
                // Il y a des erreurs, afficher le formulaire avec les erreurs
                $proprietaireDAO = new ProprietaireDAO();
                $proprietaires = $proprietaireDAO->fetch_all();
                include '../views/layout/top.php';
                include '../views/animaux/A_edit.php';
                return;
            }
    
            //if Pas d'erreur
            $animal->nom = $data["nom"] ?? $animal->nom;
            $animal->sexe = $data["sexe"] ?? $animal->sexe;
            $animal->sterilise = isset($data["sterilise"]) ? $data["sterilise"] : $animal->sterilise;
            $animal->dateNaiss = $data["datenaiss"] ?? $animal->datenaiss;
            $animal->numeroid = $data["numeroid"] ?? $animal->numeroid;
    
            $animal->save();
            
            
            return include '../views/animaux/A_update.php';
        }
    
        include '../views/animaux/A_notfound.php';
    }
    
    public function store($data) {
        $errors = [];
    
        if ($data && $data["nom"]) {
            if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["nom"])) {
                $errors["nom"] = "Le nom doit commencer par une majuscule et ne doit contenir que des lettres.";
            }
            if (!preg_match('/^[a-zA-Z]*$/', $data["sexe"])) {
                $errors["sexe"] = "Le sexe ne doit contenir que des lettres.";
            }
            if (!isset($data["sterilise"]) || ($data["sterilise"] != "1" && $data["sterilise"] != "0")) {
                $errors["sterilise"] = "La valeur du champ 'sterilise' doit être soit '1' (oui) ou '0' (non).";
            }
            if (!DateTime::createFromFormat('Y-m-d', $data["datenaiss"])) {
                $errors["datenaiss"] = "Le champ 'datenaiss' doit être au format 'Y-m-d' (ex : 2023-06-13).";
            }
            if (!preg_match('/^[0-9]*$/', $data["numeroid"])) {
                $errors["numeroid"] = "Le champ 'numeroid' ne doit contenir que des chiffres.";
            }
            
            if (count($errors) > 0) {
                $proprietaireDAO = new ProprietaireDAO();
                $proprietaires = $proprietaireDAO->fetch_all();
                include('../views/layout/top.php');
                include '../views/animaux/A_create.php';
                return;
            }
    
            // Pas d'erreur, vérifier l'âge de l'animal
            $dateNaiss = DateTime::createFromFormat('Y-m-d', $data["datenaiss"]);
            $currentDate = new DateTime();
            $diff = $dateNaiss->diff($currentDate);
            if ($diff->y > 40) {
                $errors["datenaiss"] = "Votre animal ne peut pas être empaillé, veuillez rentrer une date inférieure à 40 ans.";
                $proprietaireDAO = new ProprietaireDAO();
                $proprietaires = $proprietaireDAO->fetch_all();
                include('../views/layout/top.php');
                include '../views/animaux/A_create.php';
                return;
            }
    
            // Pas d'erreur, créer l'animal
            $sterilise = isset($data["sterilise"]) && $data["sterilise"] ? true : false;
            $animal = new Animal($data["nom"], $data['sexe'], $sterilise, $data['datenaiss'], $data['numeroid'], $data['proprietaireid']);
            $animal->save();
            return include '../views/animaux/A_store.php';
        }
    }
    



    // supprime un animal
    public function destroy($id)
    {
        $animaux = Animal::find($id);
        $sejourDAO = new SejourDAO();
        $sejours = $sejourDAO->where('AnimalId', $id); // Récupérer les animaux associés au propriétaire
    
        if ($animaux) {
            if (is_array($sejours) && count($sejours) > 0) {
                return include '../views/animaux/A_error.php';
            } else {
                $animaux->delete();
                return include '../views/animaux/A_delete.php';
            }
        }
    
        return include '../views/animaux/A_notfound.php';
    }
    


}
