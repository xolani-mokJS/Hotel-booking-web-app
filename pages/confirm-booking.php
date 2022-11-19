<?php

require __DIR__ . "/../classes/Hotel.php";


session_start();

$selectedHotelId = $_GET['hotelId'];


$selectedHotel;


foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1 class="title">
            Welcome to HotelCompare.com
        </h1>
        <p class="subtitle"> Your home for affordable hotels around the world.</p>
    </header>

    <section class="Booking-info">

    <h3 class="">
        Confirm Booking
</h3>

    <div  class='box'>
        <p class="p-1">
            Customer Information:
            </p>
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


    <p class="p">
        Hotel Information:
        </p>
    <?php
        echo "
            <div class='box'>
                <li> ". $selectedHotel->getName() ." </li>
                <li> R". $selectedHotel->getCostPerNight() ." Per night </li>
                <li>";
                    if( !$selectedHotel->getFullyBooked() ) {
                    echo "<span class='success-text'> Rooms Available </span>";
                    } else {
                    echo "<span class='error-text'> No rooms available </span>";
                    }
        echo    "</li>             
            </div>
        ";
    ?>

    <form action="./../includes/logout.php">
        <button class="button-back" type="submit">logout</button>
    </form>

    </section>

   

</body>

</html>