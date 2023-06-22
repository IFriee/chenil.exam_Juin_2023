<?php

class DashboardController
{
    public function index()
    {
        $proprietaires = $this->loadProprietaires();
        $totalSejours = $this->calculateTotalSejours();
        $totalAnimaux = $this->calculateTotalAnimaux();
        $totalProprietaires = $this->calculateTotalProprietaires();

        include('../views/dashboard/D_home.php');
    }

    public function filterByProprietaire($proprietaireId)
    {
        $sejours = $this->getSejoursByProprietaire($proprietaireId);

        include('../views/dashboard/sejours.php');
    }


    // non fonctionnel
    public function calculateOccupationRate($date)
    {
        $occupationRate = $this->calculateOccupationRateForDate($date);

        include('../views/dashboard/occupation.php');
    }


    private function loadProprietaires()
    {
        $proprietaireDAO = new ProprietaireDAO();
        $proprietaires = $proprietaireDAO->fetch_all();
        
        return $proprietaires;
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

    private function getSejoursByProprietaire($proprietaireId)
    {
        $proprietaire = Proprietaire::find($proprietaireId);
        
        if ($proprietaire) {
            $animaux = $proprietaire->animal;
            
            $totalSejours = 0;
            
            foreach ($animaux as $animal) {
                $sejours = $animal->sejour; 
                
                $totalSejours += $sejours->count();
            }
            
            return $totalSejours;
        }
        
        return 0; 
    }
    
        // non fonctionnel

    
    private function calculateOccupationRateForDate($date)
    {
        return 0.75;
    }

}
