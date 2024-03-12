<?php

    
class Room {

    private float $_price;
    private int $_nbr_room;
    private int $_nbr_bed;
    private bool $_wifi;
    private Hotel $_hotel; // objet HOTEL
    private array $_reservations; // tableau de reservation de chambre 

    public function __construct(Hotel $hotel, int $nbrRoom, int $nbrBed, int $price, bool $wifi) {
    
        $this->_price = $price; // prix pour J 
        $this->_nbr_bed = $nbrBed;
        $this->_nbr_room = $nbrRoom;
        $this->_wifi = $wifi;
        $this->_hotel = $hotel; // object HOTEL
        $this->_hotel->addBed($this); // -> call from function  // object HOTEL
        $this->_reservations = []; // tableau de reservation vidé 
    }
    

    //========== FUNCTIONS ==========\\

    // Function qui va stocker les chambres  
    public function addReserv(Reservation $reservBed) {
        $this->_reservations[] = $reservBed;
    }

    
    // Fonction affiche les informations 
    public function __toString() {
        if($this->_wifi) {
            return $this->_hotel->__toString() ." / Chambre : ". $this->_nbr_room ." ( ". $this->_nbr_bed ." lits - ". $this->_price ."€ - Wifi : OUI ) - du ";
        } else {
            return $this->_hotel->__toString() ." / Chambre : ". $this->_nbr_room ." ( ". $this->_nbr_bed ." lits - ". $this->_price ."€ - Wifi : NON ) - du ";
        }
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

    
    //ROOM
    public function get_nbr_room()
    {
        return $this->_nbr_room;
    }
   
    public function set_nbr_room($_nbr_room)
    {
        $this->_nbr_room = $_nbr_room;

        return $this;
    }


    // HOTEL
    public function get_hotel()
    {
        return $this->_hotel;
    }

    public function set_hotel($_hotel)
    {
        $this->_hotel = $_hotel;

        return $this;
    }


    // WIFI
    public function get_wifi()
    {
        return $this->_wifi;
    }

    public function set_wifi($_wifi)
    {
        $this->_wifi = $_wifi;

        return $this;
    }
}

?>