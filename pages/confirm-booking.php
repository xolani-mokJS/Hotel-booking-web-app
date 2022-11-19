<?php

require __DIR__ . "/../classes/Hotel.php";


session_start();

// retrieve id variable from GET superglobal
$selectedHotelId = $_GET['hotelId'];

// empty variable to hold value of selected hotel object
$selectedHotel;

/* --- Filtering ---
        1. loop over entire list of hotels

        2. take id that passed through GET request and 
           compares it to the id's of all hotels in array

        3. if the id of any hotel in array is the same as
           the id given from the previous page, we pull that Hotel
           object out of the array, and assign it to the $selectedHotel variable
    */
foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}

// print out variable $selectedHotel to test
// var_dump($selectedHotel);

echo "custoemr data:";

var_dump($_SESSION['customer']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

    <h1 class="title">
        Confirm Booking
    </h1>

    <hr>

    <div  class='box'>
        <h2 class="subtitle">
            Customer Information:
        </h2>
        <?php
            foreach ($_SESSION['customer'] as $detail) {
                echo "
                    <li>
                        $detail
                    </li>
                ";   
            }
        ?>
    </div>


    <h2 class="subtitle">
        Hotel Information:
    </h2>
    <?php
        echo "
            <div class='box'>
                <li> Hotel Id: ". $selectedHotel->getId() ." </li>
                <li> Name: ". $selectedHotel->getName() ." </li>
                <li> Cost per night: R". $selectedHotel->getCostPerNight() ." </li>
                <li>";
                    if( !$selectedHotel->getFullyBooked() ) {
                    echo "<span class='has-text-success'> Rooms Available </span>";
                    } else {
                    echo "<span class='has-text-danger'> No rooms available </span>";
                    }
        echo    "</li>             
            </div>
        ";
    ?>

    <hr>

    <form action="./../includes/logout.php">
        <button type="submit">logout</button>
    </form>

</body>

</html>