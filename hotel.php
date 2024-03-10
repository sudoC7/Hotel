<?php


class hotel {
    
    private string $_companyName;
    private string $_address;
    private string $_postalCode;
    private string $_city;
    private array $_bed;

    public function __construct(string $companyName, string $address, string $postalCode, string $city, ) {
        $this->_companyName = $companyName;
        $this->_address = $address;
        $this->_postalCode = $postalCode;
        $this->_city = $city;
        $this->_bed = [];
    }


    //========== FUNCTIONS ==========\\
    
  
    //fonction reservation ???
    public function reserFromHotel() {
        // Affichage nombre de reservation 
        // nomClient - Chambre ** - date du au du de reservation 
    }

    //fonction qui listera toutes les chambres de l'hotel "réservée et disponible"
    
    public function bedRoomList() {
        
        //cree une condition si aucune chambre n'est reservé ou toutes les chambres sont disponible afficher le message " Aucune réservation ! "
        // crée une boucle foreach qui va afficher toutes chambres 
        //chambres - prix - wifi(oui/non) - etat(reservé/dispo)
        
    }


    //fonction qui ajoutera une chambre reservé 
    public function addBed(chambre $bedReserve) {
            $this->_bed[] = $bedReserve;
    }

    //Affiche adresse complet 
    public function addressComplet() {
        echo $this->_address. " " .$this->_postalCode. " " .$this->_city;
    }

    //Affiche Nom et la Ville 
    public function __toString() {
        return $this->_companyName." ".$this->_city;
    }
    
    //========== GET & SET==========\\


    // COMPANY NAME
    public function get_companyName()
    {
        return $this->_companyName;
    }

    public function set_companyName($_companyName)
    {
        $this->_companyName = $_companyName;

        return $this;
    }

  
    // ADDRESS
    public function get_address()
    {
        return $this->_address;
    }

    public function set_address($_address)
    {
        $this->_address = $_address;

        return $this;
    }


    // POSTAL CODE
    public function get_postalCode()
    {
        return $this->_postalCode;
    }
 
    public function set_postalCode($_postalCode)
    {
        $this->_postalCode = $_postalCode;

        return $this;
    }

    
    // CITY 
    public function get_city()
    {
        return $this->_city;
    }

    public function set_city($_city)
    {
        $this->_city = $_city;

        return $this;
    }


    // BED
    public function get_bed()
    {
        return $this->_bed;
    }
 
    public function set_bed($_bed)
    {
        $this->_bed = $_bed;

        return $this;
    }
}


?>