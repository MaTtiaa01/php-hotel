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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
</head>

<body>
    <div class="container">
        <h1>hotel list</h1>
        <div class="container">
            <div class="row">
                <?php foreach ($hotels as $hotel)  ?>
                <div class="col">
                    <?php echo $hotel['name'] ?>
                </div>
                <div class="col">
                    <?php echo $hotel['description'] ?>
                </div>
                <div class="col">
                    yes
                </div>
                <div class="col">
                    <?php echo $hotel['vote'] ?>
                </div>
                <div class="col">
                    <?php echo $hotel['distance_to_center'] ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>