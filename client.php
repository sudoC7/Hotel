<?php

    
class client {

    private string $_firstName;
    private string $_lastName;
    private array $_reservation;

    public function __construct($firstName, $lastName) {
        
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_reservation = [];

    }


    //========== FUNCTIONS ==========\\



    // public function addReserv( )
    public function addReserv(/* objet reservation (dans le quel on aura le nom de l'hotel la chambre avec numero + les options et la date d'entree et sortie) */ ) {

    }

    //Crée une fonction qui affichera toutes les reservation du client 
    public function listReserv() {
        //cree une boucle foreach qui listera tous 
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