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
    $value = $_POST['value'];
    $SameHotels = $hotels;
    if(isset($_GET['value']) && $_GET['value'] !== ''){

        $filterHotels = [];
        foreach($hotels as $hotel){
            if($hotel['vote'] >= $_GET['value']){
                $filterHotels [] = $hotel;
            }
        }
        $SameHotels = $filterHotels;
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Hotel</title>
    </head>
    <body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-6">
            <h4>FILTER YOUR SEARCH</h4>
            </div>
            <div class="col-6">
                <form action="index.php">
                    <div class="input-group mb-3" style="width: 80%;">
                        <select class="form-select" id="inputGroupSelect01" name="value">
                            <option selected>Choose Hotel Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars </option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($SameHotels as $hotel){ ?>
                            <tr>
                                <?php foreach($hotel as $key => $item){ ?>
                                <td>
                                    <?php if($key == 'parking'){
                                        if($item == true){
                                            echo 'Si';
                                        }
                                        else{
                                            echo 'No';
                                        }
                                    }
                                    else{
                                        echo $item;
                                    } ?>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
    </body>
</html>