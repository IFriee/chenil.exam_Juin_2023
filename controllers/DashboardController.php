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


        // non fonctionnel
}
