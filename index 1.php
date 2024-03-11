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


        //client 
        $client = new Client("Aaron", "Jacob");

        //HOTEL
        //(string $companyName, string $address, string $postalCode, string $city)
        $hotel = new Hotel("Hilton ****", "10 rue de la Pierre", "67000", "Strasbourg");

        //ROOM
        //(Hotel $sleepHere, int $nbrRoom, int $nbrBed, int $price, bool $wifi)
        $room = new Room($hotel, 2, 2, 190, 0);// l'Hotel, numero du chambre, nombre de lit, prix du reservation, oui = 1 non = 0 pour wifi 

        //RESERVATION
        //(Client $client, Room $bed, string $dateInput, string $dateOutput)
        $reservation = new Reservation($client, $room, "2024-03-10", "2024-03-17");

        $client->afficherReservTitulaire();
       

              
    ?>

</body>
</html>