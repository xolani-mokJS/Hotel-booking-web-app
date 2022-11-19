<?php

    require __DIR__ . "/../classes/hotel.class.php";
    require_once __DIR__ . "/../includes/hotelDatabase.php";

    session_start();

    /* 
        Array inside of the SESSION Superglobal to hold hotel objects that
        are inside the system
    */

    // Set value of session variable == data in hotelData.php
    $_SESSION['hotelList'] = $hotelData;

    /* 
        If user submitted data through the form
        we want to save their data to local variables
    */

    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $inDate = $_POST['checkInDate'];
        $outDate = $_POST['checkoutDate'];

    
            $_SESSION['userNumDays'] = Hotel::calculateNumDays($inDate, $outDate);

            $userNumDays = $_SESSION['userNumDays'];
     

        // saving user data to SESSION superglobal
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <h1 class="title">
        Hotel List:
    </h1>

    <ul class="grid">
        <?php
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
                <div class='box m-2'>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                        } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                        }
            echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <div class='is-flex'>
                        <form class='m-1' action='confirm-booking.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-danger' name='book'>Book</button>
                        </form>

                        <form class='m-1' action='hotel-details.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-info' name='book'>Details</button>
                        </form>
                    </div>
                </div>
            ";
        }
        ?>
    </ul>

</body>

</html>