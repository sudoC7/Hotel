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


        // 
        $client = new client("Aaron", "Jacob");
        // echo $client->__toString();

        // $r1 = new reservation(/*Hotel*/, /*Chambre*/, /*Date(entree:sortie)*/);

        
    ?>

</body>
</html>