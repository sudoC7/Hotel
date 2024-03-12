<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    
    
    <?php


class Hotel {
    
    private string $_companyName;
    private string $_address;
    private string $_postalCode;
    private string $_city;
    private array $_rooms;
    private array $_reservationsHotel;
    
    public function __construct(string $companyName, string $address, string $postalCode, string $city) {
        $this->_companyName = $companyName;
        $this->_address = $address;
        $this->_postalCode = $postalCode;
        $this->_city = $city;
        $this->_rooms = [];
        $this->_reservationsHotel = [];
    }
    

    //========== FUNCTIONS ==========\\
    
    // Fonction qui ajoutera une chambre reservée 
    public function addBed(Room $bedReserve) {
        $this->_rooms[] = $bedReserve;
    }
    //------------------------------------------------------------------------
    
    
    // Réservation chambre
    public function addReservHotel(Reservation $theReserv ) {
        $this->_reservationsHotel[] = $theReserv;
    } 
    //------------------------------------------------------------------------
    
    
    //Fonction qui affichera les statuts des chambres
    public function statusRoom() {
        $wifi = "";
        $etat = "DISPONIBLE";
        $result = "<table style=' margin-top:20px; font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 45%;'>
        <tr>
                    <th>CHAMBRE</th>
                            <th>PRIX</th>
                            <th>WIFI</th>
                            <th>ETAT</th>
                            </tr>";
                            foreach($this->_rooms as $status) {
                                if($status->get_wifi() == 1) {
                                    $wifi = "<i class='fa fa-wifi'></i>";
                                }
                                //???
                                if($this->_reservationsHotel->$status->get_room()->get_nbr_room() == $status->get_nbr_room()) {
                                    $etat = "<p style=''>RESERVE</p>";
                                }
                                //???
                                $result .= "<tr>
                                <td> Chambre ".$status->get_nbr_room()."</td>
                                <td>".$status->get_price()." €</td>
                                <td>".$wifi."</td>
                                <td>".$etat."</td></tr>";                                          
                                $wifi="";
                            }
                            $result .= "</table>";
                    
        return $result;
    }
    
    // Faut il faire une fonction de chambre reservé et disponible ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ? ?
                
                
    //------------------------------------------------------------------------
                
                
    // Fonction qui affiche le nombre de chambre et leurs état de réservation
    public function countRoom() {
                    
        $totalRoom = 30;
        $result = "<h2>".$this->_companyName. " " .$this->_city. "</h2><br>" .$this->_address. " " .$this->_postalCode. " " .$this->_city. "<br>";

        $result .= "Nombre de chambres : " .$totalRoom. 
        "<br>Nombre de chambre réservées : " .count($this->_rooms). 
        "<br>Nombre de chambre disponible : " .$totalRoom - count($this->_rooms);
        
        return $result;

    }
    //------------------------------------------------------------------------
    
    
    // Fonction AFFICHE toutes les chambres réservées
    public function displayRooms() {
        
        if($this->_reservationsHotel == null) {
            return $not =  "<h2>Réservation de l'hotel $this->_companyName $this->_city</h2><p style='font-size:23px; margin-top:0;'>Aucune réservation !</p>";
        }

        $result = "<h2 style='margin:0;'>Réservation de l'hotel $this->_companyName $this->_city</h2> 
        <p style='width:140px;padding:3px;border-radius: 3px;background-color: #33D396;';>".count($this->_reservationsHotel) ." RÉSERVATION/S</p>";
        foreach ($this->_reservationsHotel as $nbrReserv) {
            $result .= "<br><p style='font-size:19px; margin:0;'>". $nbrReserv->reservHotel(). "</p></br>";
        }
        
        return $result;
    }
    //------------------------------------------------------------------------
    
    
    // Affiche adresse complet 
    public function addressComplet() {
        return $this->_address. " " .$this->_postalCode. " " .$this->_city;
    }
    //------------------------------------------------------------------------


    // Affiche Nom et la Ville 
    public function __toString() {
        return $this->_companyName." ".$this->_city;
    }
    //------------------------------------------------------------------------
    

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


</body>
</html>