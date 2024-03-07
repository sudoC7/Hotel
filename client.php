<?php

    
class client {

    private string $_firstName;
    private string $_lastName;

    public function __construct($firstName, $lastName) {
        
        $this->$_firstName = $firstName;
        $this->$_lastName = $lastName;

    }


    //========== FUNCTIONS ==========\\










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
    public function get_lastName()
    {
        return $this->_lastName;
    }
 
    public function set_lastName($_lastName)
    {
        $this->_lastName = $_lastName;

        return $this;
    }
}


?>