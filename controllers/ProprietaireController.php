<?php

class ProprietaireController {
    //liste les proprietaires
    public function index () {
        $proprietaires = Proprietaire::all();
        include '../views/proprietaires/P_list.php';
    }
    

    
    //affiche le formulaire de création
    public function create () {
        return include '../views/proprietaires/P_create.php';
    }
    
    //affiche le formulaire d'édition
    public function edit ($id) {
        $proprietaire = Proprietaire::find($id);
        if ($proprietaire) {
            return include '../views/proprietaires/P_edit.php';
        }
        return include '../views/proprietaires/P_notfound.php';
    }
    
    //sauvegarde un Proprietaire
    public function store($data){
        $errors = array();

        if ($data && $data["nom"]) {
            if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["nom"])) {
                $errors["nom"] = "Le nom doit commencer par une majuscule et ne doit contenir que des lettres.";
            }
        if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["prenom"])) {
            $errors["prenom"] = "Le prénom doit commencer par une majuscule et ne doit contenir que des lettres.";
        }
        $dateNaiss = DateTime::createFromFormat('Y-m-d', $data["datenaiss"]);
        $currentDate = new DateTime();
        
        if (!$dateNaiss || $dateNaiss > $currentDate) {
            $errors["datenaiss"] = "Le champ  doit être une date valide et ne pas être dans le futur.";
        }
        
        if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "L'adresse email n'est pas valide.";
        }
        if (!preg_match('/^[0-9]{10}$/', $data["tel"])) {
            $errors["tel"] = "Le numéro de téléphone doit être composé de 10 chiffres.";
        }
        if (count($errors) > 0) {
                include '../views/layout/top.php';
                include '../views/proprietaires/P_create.php';
                return;
    }

    // Si aucune erreur,
    $proprietaire = new Proprietaire($data['nom'], $data['prenom'], $data['datenaiss'], $data['email'], $data['tel']);
    $proprietaire->save();
    return include '../views/proprietaires/P_store.php';
}
    }

    
    



    public function update($id, $data) {
        $proprietaire = Proprietaire::find($id);
        if ($proprietaire) {
            $errors = array();
    
            if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["nom"])) {
                $errors["nom"] = "Le nom doit commencer par une majuscule et ne doit contenir que des lettres.";
            }
            if (!preg_match('/^[A-Z][a-zA-Z]*$/', $data["prenom"])) {
                $errors["prenom"] = "Le prénom doit commencer par une majuscule et ne doit contenir que des lettres.";
            }
            $dateNaiss = DateTime::createFromFormat('Y-m-d', $data["datenaiss"]);
            $currentDate = new DateTime();
            
            if (!$dateNaiss || $dateNaiss > $currentDate) {
                $errors["datenaiss"] = "Le champ  doit être une date valide et ne pas être dans le futur.";
            }
            
            if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "L'adresse email n'est pas valide.";
            }
            if (!preg_match('/^[0-9]{10}$/', $data["tel"])) {
                $errors["tel"] = "Le numéro de téléphone doit être composé de 10 chiffres.";
            }
    
            if (count($errors) > 0) {
                // Il y a des erreurs, afficher le formulaire avec les erreurs
                include '../views/layout/top.php';
                include '../views/proprietaires/P_edit.php';
                return;
            }
    
            // Pas d'erreur, mettre à jour les données
            $proprietaire->nom = $data["nom"] ?? $proprietaire->nom;
            $proprietaire->prenom = $data["prenom"] ?? $proprietaire->prenom;
            $proprietaire->datenaiss = $data["datenaiss"] ?? $proprietaire->datenaiss;
            $proprietaire->email = $data["email"] ?? $proprietaire->email;
            $proprietaire->tel = $data["tel"] ?? $proprietaire->tel;
    
            $proprietaire->save();
            return include '../views/proprietaires/P_update.php';
        }
    
        return include '../views/proprietaires/P_notfound.php';
    }
    
    
    //suppr un proprietaire
    public function destroy ($id) {
        $proprietaire = Proprietaire::find($id);
        if ($proprietaire) {
            $proprietaire->delete();
            return include '../views/proprietaires/P_delete.php';
        }
        return include '../views/proprietaires/P_notfound.php';
    }
}