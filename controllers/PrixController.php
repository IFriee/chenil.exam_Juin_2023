<?php

class PrixController {
    //liste les prix
    public function index ($prix) {
        $prix = Prix::all();
        include '../views/prix/P_list.php';
    }
    

    
    //affiche le formulaire de création
    public function create () {

        return include '../views/prix/P_create.php';
    }
    
    //affiche le formulaire d'édition
    public function edit ($id) {
        $prix = Prix::find($id);
        if ($prix) {

            return include '../views/prix/P_edit.php';
        }
        return include '../views/prix/P_notfound.php';
    }
    
    //sauvegarde un sejour
    public function store($data){

        
            
            $prix = new Prix($data["nom"], $data["prix"]);
            $prix->save();
            
            return include '../views/prix/P_store.php';
        }
    

    
    //met a jour un sejour
    public function update($id, $data)
    {
        $prix = Prix::find($id);
        
                
                $prix->nom = $data["nom"];
                $prix->prix = $data["prix"];
            
            
            $prix->save();
            return include '../views/prix/P_update.php';
        
        
    }
    
    
    //suppr un sejour
    public function destroy ($id) {
        $prix = Prix::find($id);
        if ($prix) {
            $prix->delete();
            return include '../views/prix/P_delete.php';
        }
        return include '../views/prix/P_notfound.php';
    }





}