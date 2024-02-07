<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel</title>

        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        
        <header>
            <h1>Hotel</h1>
        </header>

        <main>
            <div>
                
            <?php 
                    foreach($hotels as $hotel){
                        echo '<p>'.'Nome: '.$hotel['name'].'</p>';
                        echo '<p>'.'Descrizione: '.$hotel['description'].'</p>';
                        if($hotel['parking'] == true){
                            echo '<p>Parcheggio: SI </p>';
                        }
                        else{
                            echo '<p>Parcheggio:NO </p>';
                        }
                        echo '<p>'.'Voto: '.$hotel['vote'].'</p>';
                        echo '<p>'.'Distanza dal centro: '.$hotel['distance_to_center'].'</p>';
                        echo '<hr>';
                    }
                ?>
                


            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>