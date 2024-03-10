<?php

    
class chambre {

    private string $_client_name;
    private int $_price;
    private int $_nbr_bed;
    private int $_nbr_room;
    private bool $_wifi;
    private hotel $_sleep_here; // objet HOTEL
    private array $_reservation; // tableau de reservation de chambre 

    public function __construct(hotel $sleepHere, string $clientName, int $nbrBed, bool $wifi) {
        $this->_client_name = $clientName; // ici on a le nom du client qu'on pourras passser a l'hotel 
        $this->_price = 120; // price to the night
        $this->_nbr_bed = $nbrBed;
        $this->_wifi = $wifi;
        $this->_sleep_here = $sleepHere; // object HOTEL
        $this->_sleep_here->addBed($this); // -> call from function  // object HOTEL
        $this->_reservation = []; // tableau de reservation vidé 
    }
    

    //========== FUNCTIONS ==========\\
    
    
    
    
    
    public function bedReserve() {
        echo $this->_client_name. " - Chambre " . $this->_nbr_room ." - du ";
    }
    
    public function __toString() {
        // return 
    }
    
    //========== GET & SET==========\\

    
    // CLIENT
    public function get_client_name() : String
    {
        return $this->_client_name;
    }

    public function set_client_name($_client_name) : String
    {
        $this->_client_name = $_client_name;

        return $this;
    }

  
    // PRICE
    public function get_price()
    {
        return $this->_price;
    }

    public function set_price($_price)
    {
        $this->_price = $_price;

        return $this;
    }


    // BED
    public function get_nbr_bed()
    {
        return $this->_nbr_bed;
    }

    public function set_nbr_bed($_nbr_bed)
    {
        $this->_nbr_bed = $_nbr_bed;

        return $this;
    }


    // HOTEL
    public function get_sleep_here()
    {
        return $this->_sleep_here;
    }

    public function set_sleep_here($_sleep_here)
    {
        $this->_sleep_here = $_sleep_here;

        return $this;
    }

}


?>