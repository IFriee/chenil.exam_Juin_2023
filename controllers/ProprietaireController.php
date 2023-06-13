<?php

class ProprietaireController {
    //liste les students
    public function index () {
        var_dump('in index');
    }
    
    //affiche un student
    public function show ($id) {
        var_dump('in show');
    }
    
    //affiche le formulaire de création
    public function create () {
        var_dump('in create');
    }
    
    //affiche le formulaire d'édition
    public function edit ($id) {
        var_dump('in edit');
    }
    
    //sauvegarde un student
    public function store ($data) {
        var_dump('in store');
    }
    
    //met a jour un student
    public function update ($id, $data) {
        var_dump('in update');
    }
    
    //suppr un student
    public function destroy ($id) {
        var_dump('in destroy');
    }
}