<?php

    
class Client {

    private string $_firstName;
    private string $_lastName;
    private array $_reservations;

    public function __construct($firstName, $lastName) {
        
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_reservations = [];

    }


    //========== FUNCTIONS ==========\\


    // Fonction qui increment chaque reservation du Client 
    public function addReserv(Reservation $theReserv ) {
        $this->_reservations[] = $theReserv;
    }


    // Fonction AFFICHE INFO RESERVATION DU CLIENT 
    public function afficherReservTitulaire() {
        $totalPrice = 0;
        $result = "<h2>Réservation de $this->_firstName $this->_lastName</h2>
        <p style='width:140px;padding:3px;border-radius: 3px;background-color: #33D396;';>".count($this->_reservations) ." RÉSERVATION/S</p>";

        foreach ($this->_reservations as $reserv) {
            $result .= "<b>".$reserv->reservClient()."</b><br>";

        }
        return $result;
    }


    // Fonction affichant le prix total des reservation du client 
    public function total() {
        $result = "Total : ";
        $totalPrice = 0;

        foreach ($this->_reservations as $total) {
            $totalPrice += $total->totalPrice();
        }

        return $result .=$totalPrice." €";
    }


    // Fonction affichan nom et prenom 
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