
<?php 

require "../classes/Hotel.php";

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
    <title>Hotel Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<header>
        <h1 class="title">
            Welcome to HotelCompare.com
        </h1>
        <p class="subtitle"> Your home for affordable hotels around the world.</p>
    </header>

    <section class="hotel-detail">
    <h1 class="title">
            <?php echo $selectedHotel->getName(); ?>
        </h1>

        <div class='image-center'>
            <img 
                class="hotel-thumbnail" 
                src="<?php echo $selectedHotel->getImg(); ?>"
                alt="hotel" 
            >
        </div>

        <div class="column m-1">
            <?php
                echo "
                    <div>
                        <div> Hotel Id: ". $selectedHotel->getId() ." </div>
                        <div> Name: ". $selectedHotel->getName() ." </div>
                        <div> Cost per night: R". $selectedHotel->getCostPerNight() ." </div>
                        <div>";
                            if( !$selectedHotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                            } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                            }
                echo    "</div>             
                    </div>
                ";
            ?>
        </div>

        <div class="pull-right"> 

            <!-- Description List -->
            <ul class="column m-1"> 
                <?php 
                    foreach ( $selectedHotel->getDescription() as $detailKey => $selectedHotelDescription ) {
                        echo "
                            <li class='columns'> 
                                <span class='column'> $detailKey </span> 
                                <span class='column'> $selectedHotelDescription </span>
                            </li>
                        ";
                    } 
                ?> 
            </ul>

        </div>

      

        <form action="hotels.php" method="get">
            <button class="button-back" type="submit">Back</button>
        </form>
    </section>
       

</body>
</html>