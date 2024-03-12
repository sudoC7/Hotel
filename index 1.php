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

        // Client
        $client = new Client('Aaron', 'Jacob');
        $client1= new Client('Micka', 'Murmann');
        //-----------------------

        // Hotel 
        $hotel = new Hotel('Hilton ****', '10 rue de la Pierre', '67000', 'Strasbourg');
        $hotel1 = new Hotel('Athena ***', '12 rue de  Label', '67100', 'Schiltigheim');
        //-----------------------

        // Réservation de chambre 
        $room1 = new Room($hotel, 2, 2, 120, 1); 
        $reservation1 = new Reservation($client, $room1, '11-03-2024', '15-03-2024');
        
        $room2 = new Room($hotel, 5, 2, 120, 0); 
        $reservation2 = new Reservation($client, $room2, '01-04-2024', '17-04-2024');
        
        $room3 = new Room($hotel, 7, 2, 120, 1); 
        $reservation3 = new Reservation($client1, $room3, '15-03-2024', '17-03-2024');
        
        $room4 = new Room($hotel, 9, 2, 120, 0); 
        //-----------------------
        
        echo $hotel->countRoom();
        
        echo $hotel->displayRooms();
        echo $hotel1->displayRooms();
        
    
        echo $client->afficherReservTitulaire();
        echo $client->total();

        echo $hotel->statusRoom();
        
        // echo $reservation1->totalPrice();
        // echo $reservation->interval()."<br>";
        // echo $reservation->totalPrice();
       
              
    ?>

</body>
</html>