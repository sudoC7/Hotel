<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
</head>
<body>
    
    <?php

        spl_autoload_register(function($class_name){ 
            require $class_name . '.php';
        });


        
        $client = new client("Aaron", "Jacob");
      
        $hotel = new hotel('Hilton ****', '10 route de la Gare', '67000', 'Strasbourg');

        $hotel->addressComplet();
        // public function __construct(hotel $sleepHere, string $clientName, int $nbrBed, bool $wifi
        //je passe le nom du client via la reservation 
        // $chambre = new chambre($hotel, $reservation->$this->_client->__toString(), 3, 0);

        // // __construct(client $client, chambre $bed, string $dateInput, string $dateOutput) {
        // $reservation = new reservation($client, $chambre, "2024-03-10", "2024-03-17");

        // $reservation->interval();

        // (string $companyName, string $address, string $postalCode, string $city)
        
    ?>

</body>
</html>