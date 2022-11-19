<?php

    require __DIR__ . "/../classes/Hotel.php";
    require_once __DIR__ . "/../includes/hotelData.php";

    session_start();

    $_SESSION['hotelList'] = $hotelData;

    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $inDate = $_POST['checkInDate'];
        $outDate = $_POST['checkoutDate'];

    
            $_SESSION['userNumDays'] = Hotel::calculateNumDays($inDate, $outDate);

            $userNumDays = $_SESSION['userNumDays'];
     

        $_SESSION['customer'] = [
            'name' => $name,
            'email' => $email,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'userNumDays' => $userNumDays,
        ];

        var_dump($_SESSION['customer']);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Hotel</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <h1 class="title">
            Welcome to HotelCompare.com
        </h1>
        <p class="subtitle"> Your home for affordable hotels around the world.</p>    
        <hr>
        <p class="p">
        Check out the results and choose one to book:
    </p>
    </header>



    <ul class="hotel-info">
        <?php
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
                <div class='box m-2'>
                    <li> " . $hotel->getimg()."</li>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='success-text'> Rooms Available </span>";
                        } else {
                            echo "<span class='error-text'> No rooms available </span>";
                        }

            echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <div class='is-flex'>
                        <form class='m-1' action='confirm-booking.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='book-button' name='book'>Make Booking</button>
                        </form>

                        <form class='m-1' action='hotel-details.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='details-button' name='book'>More Information</button>
                        </form>
                    </div>
                </div>
            ";
        }
        ?>
    </ul>

</body>

</html>