<?php

    
class Client {

    private string $_firstName;
    private string $_lastName;
    private array $_reservation;
    private $_tion;

    public function __construct($firstName, $lastName) {
        
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_reservation = [];


        $this->_tion;

    }


    //========== FUNCTIONS ==========\\

    // public function addReserv( )
    public function addReserv(Reservation $theReserv ) {
        $this->_reservation[] = $theReserv;
    }

    //Fonction test
    
    //Crée une fonction qui affichera toutes les reservation du client 
    public function listReserv() {
        
        //boucle foreache
    }





    // Fonction AFFICHE INFO RESERVATION DU CLIENT 
        
    public function afficherReservTitulaire() {
        $result = "<h2><u>Reservation de</u></h2> $this->_firstName $this->_lastName<br>";

        foreach ($this->_reservation as $reserv) {
            $result .= "<b>".$reserv->reservClient()."</b><br>";
        }

        return $result;
    }
     














    //Affiche nom et prenom 
    public function __toString() {
        return $this->_firstName." ".$this->_lastName;   
    }

    //========== GET & SET==========\\
    

    // FIRSTNAME
    public function get_firstName() : string
    {
        return $this->_firstName;
    }

    public function set_firstName($_firstName)
    {
        $this->_firstName = $_firstName;

        return $this;
    }

    
    // LASTNAME
    public function get_lastName() : string
    {
        return $this->_lastName;
    }
 
    public function set_lastName($_lastName)
    {
        $this->_lastName = $_lastName;

        return $this;
    }

  
    // RESERVATION
    public function get_reservation()
    {
        return $this->_reservation;
    }

    public function set_reservation($_reservation)
    {
        $this->_reservation = $_reservation;

        return $this;
    }
}


?>