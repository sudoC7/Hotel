<?php

    
class reservation {

    private DateTime $_date_input;
    private DateTime $_date_output;
    private chambre $_bed; // object
    private client $_client; // object

    public function __construct(client $client, chambre $bed, string $dateInput, string $dateOutput) {

        $this->$_date_input = new DateTime($dateInput);
        $this->$_date_output = new DateTime($dateOutput);
        $this->_bed = $bed; // object CHAMBRE
        $this->_bed; // object CHAMBRE
        $this->_client = $client; // object CLIENT
        $this->$client; // object CLIENT
    }

    //========== FUNCTIONS ==========\\










    //========== GET & SET==========\\


    //DATE INPUT
    public function get_date_input()
    {
        return $this->_date_input;
    }

    public function set_date_input($_date_input)
    {
        $this->_date_input = $_date_input;

        return $this;
    }


    //DATE OUTPUT
    public function get_date_output()
    {
        return $this->_date_output;
    }

    public function set_date_output($_date_output)
    {
        $this->_date_output = $_date_output;

        return $this;
    }


    //BED
    public function get_bed()
    {
        return $this->_bed;
    }

    public function set_bed($_bed)
    {
        $this->_bed = $_bed;

        return $this;
    }

    
    //CLIENT
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