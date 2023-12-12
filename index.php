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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-3">
    <h1>Cerca l'hotel perfetto per te</h1>
    <form action="index.php" method="GET">
        <label for="hotel">Cerca hotel</label>
        <input type="text" id="hotel" name="hotel">

        <label for="park">Parcheggio</label>
        <select name="park" id="park">
            <option value="">Tutti</option>
            <option value="1">Con parcheggio</option>
        </select>

        <button type="submit">Cerca</button>
    </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $cur_hotel) {
                ?>
                    <tr>
                        <td><?php echo $cur_hotel['name'] ?></td>
                        <td><?php echo $cur_hotel['description']; ?></td>
                        <td><?php echo $cur_hotel['parking'] ? 'Sì' : 'No'; ?></td>
                        <td><?php echo $cur_hotel['vote'] ?></td>
                        <td><?php echo $cur_hotel['distance_to_center'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        
    </div>

    
</body>
</html>