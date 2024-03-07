<?php

    
class chambre {

    private string $_client_name;
    private int $_price;
    private int $_nbr_bed;
    private bool $_wifi;
    private hotel $_sleep_here; // objet

    public function __construct(hotel $sleepHere, string $clientName, int $price, int $nbrBed, bool $wifi) {
        $this->_client_name = $clientName;
        $this->_price = $price;
        $this->_nbr_bed = $nbrBed;
        $this->_wifi = $wifi;
        $this->_sleep_here = $sleepHere; //
        $this->_sleep_here; // -> call from function 
    }
    

    //========== FUNCTIONS ==========\\
    
    
    
    
    
    
    

    
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