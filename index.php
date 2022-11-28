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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>hotel</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-uppercase">hotel list</h1>

        <?php foreach ($hotels as $hotel) : ?>
            <div class="row">
                <div class="col border">
                    <?= $hotel['name']; ?>
                </div>
                <div class="col border">
                    <?= $hotel['description']; ?>
                </div>
                <div class="col border">
                    <?php if ($hotel['parking']) {
                        echo "parking allowed";
                    } else {
                        echo "parking NOT allowed";
                    };
                    ?>
                </div>
                <div class="col border">
                    <?= $hotel['vote']; ?>
                </div>
                <div class="col border">
                    <?= $hotel['distance_to_center']; ?>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

</body>

</html>