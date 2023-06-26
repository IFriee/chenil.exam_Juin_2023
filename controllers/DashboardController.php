<?php

class DashboardController
{
    public function index()
    {
        $totalSejours = $this->calculateTotalSejours();
        $totalAnimaux = $this->calculateTotalAnimaux();
        $totalProprietaires = $this->calculateTotalProprietaires();

        include('../views/dashboard/D_home.php');
    }

    
    

    private function calculateTotalSejours()
    {
        $sejourDAO = new SejourDAO();
        $sejours = $sejourDAO->fetch_all();
        $totalSejours = count($sejours);
        return $totalSejours;
    }
    

    private function calculateTotalAnimaux()
    {
        $animalDAO = new AnimalDAO();
        $animaux = $animalDAO->fetch_all();
        $totalAnimaux = count($animaux);
        return $totalAnimaux;
    }
    
    private function calculateTotalProprietaires()
    {
        $proprietaireDAO = new ProprietaireDAO();
        $proprietaires = $proprietaireDAO->fetch_all();
        $totalProprietaires = count($proprietaires);       
        return $totalProprietaires;
    }


    function calculerPrixSejour($animalId, $nombreJours) {
        // Récupérer l'animal depuis la base de données
        $animal = Animal::find($animalId);
        
        // Vérifier si l'animal a un prix de séjour défini
        if ($animal->prixsejourid) {
            // Récupérer le prix de séjour depuis la base de données
            $prixSejour = Prix::find($animal->prixsejourid);
            
            // Calculer le prix total du séjour
            $prixTotal = $prixSejour->prix * $nombreJours;
            
            return $prixTotal;
        } else {
            // Si le prix de séjour n'est pas défini pour l'animal, retourner 0
            return 0;
        }
    }
    
}
