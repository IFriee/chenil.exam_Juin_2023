<?php

class ProprietaireController {
    //liste les proprietaires
    public function index () {
        $proprietaires = Proprietaire::all();
        include '../views/proprietaires/P_list.php';
    }
    
    //affiche un proprietaire
    public function show ($id) {
        $proprietaire = Proprietaire::find($id);
        if ($proprietaire) {
            return include '../views/proprietaires/P_one.php'; 
        }
        return include '../views/proprietaires/P_notfound.php';
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
    public function store ($data) {
        if ($data && $data["nom"]) {
            $proprietaire = new Proprietaire($data["nom"], $data['prenom'], $data['datenaiss'], $data['email'], $data['tel']);
            $proprietaire->save();
            return include '../views/proprietaires/P_store.php';
        }
        
    }
    
    //met a jour un proprietaire
    public function update ($id, $data) {
        $proprietaire = Proprietaire::find($id);
        if ($proprietaire) {
            $proprietaire->nom = $data["nom"] ? $data["nom"] : $proprietaire->nom;
            $proprietaire->prenom = $data["prenom"] ? $data["prenom"] : $proprietaire->prenom;
            $proprietaire->datenaiss = isset($data["datenaiss"]) ? $data["datenaiss"] : $proprietaire->datenaiss;
            $proprietaire->email = $data["email"] ? $data["email"] : $proprietaire->email;
            $proprietaire->tel = $data["tel"] ? $data["tel"] : $proprietaire->tel;

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