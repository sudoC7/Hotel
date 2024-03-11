<?php


class Hotel {
    
    private string $_companyName;
    private string $_address;
    private string $_postalCode;
    private string $_city;
    private array $_rooms;

    public function __construct(string $companyName, string $address, string $postalCode, string $city) {
        $this->_companyName = $companyName;
        $this->_address = $address;
        $this->_postalCode = $postalCode;
        $this->_city = $city;
        $this->_rooms = [];
    }


    //========== FUNCTIONS ==========\\
    
  

    // Fonction AFFICHE Toutes les chambres

    public function displayRooms() {
        $result = "<h2>Reservation de l'hotel $this->_companyName $this->_city</h2>";

        foreach ($this->_rooms as $nbrReserv) {
            $result .= "<br>". $nbrReserv->forHotel(). "</b>";
        }

        return $result;
    }





















































    //fonction qui ajoutera une chambre reservé 
    public function addBed(Room $bedReserve) {
        $this->_rooms[] = $bedReserve;
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