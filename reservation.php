<?php

    
class Reservation {
    
    private DateTime $_date_input;
    private DateTime $_date_output;
    private Room $_bed; // object
    private Client $_client; // object
    private int $_totalPrice; // Pour calculer le prix total des reservations 

    public function __construct(Client $client, Room $bed, string $dateInput, string $dateOutput) {

        $this->_date_input = new DateTime($dateInput);
        $this->_date_output = new DateTime($dateOutput);
        $this->_bed = $bed; // object CHAMBRE
        $this->_bed->addReserv($this);
        $this->_bed->get_hotel()->addReservHotel($this);// appel d'un autre objet 
        $this->_client = $client; // object CLIENT
        $this->_client->addReserv($this); 
    }

    //========== FUNCTIONS ==========\\


    // Fonction affichant la reservation du client 
    public function reservClient() {
        return $this->_bed. " " .$this->_date_input->format("d-m-Y"). " au " .$this->_date_output->format("d-m-Y");
    }

    public function reservHotel() {
        return $this->_client. " - Chambre " .$this->_bed->get_nbr_room(). " - du " .$this->_date_input->format("d-m-Y"). " au " .$this->_date_output->format("d-m-Y");
    }

    //========== GET & SET==========\\


    // DATE INPUT
    public function get_date_input() : DateTime
    {
        return $this->_date_input;
    }

    public function set_date_input($_date_input)
    {
        $this->_date_input = $_date_input;

        return $this;
    }
    
    
    // DATE OUTPUT
    public function get_date_output() : DateTime
    {
        return $this->_date_output;
    }
    
    public function set_date_output($_date_output)
    {
        $this->_date_output = $_date_output;
        
        return $this;
    }
    
    
    //INTERVAL DAYS output input
    public function get_interval()
    {
        return $this->_interval;
    }

    public function set_interval($_interval)
    {
        $this->_interval = $_interval;

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

    
    // CLIENT
    public function get_client()
    {
        return $this->_client;
    }

    public function set_client($_client)
    {
        $this->_client = $_client;

        return $this;
    }


}


?>