<!-- ===============================================PHP==================================================== -->
<?php 

require "../classes/hotel.class.php";

session_start();

// retrieve id variable from GET superglobal
$selectedHotelId = $_GET['hotelId'];

// empty variable to hold value of selected hotel object
$selectedHotel;

foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}

?>

<!-- ===============================================PAGE==================================================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    

        <h1 class="title">
            <?php echo $selectedHotel->getName(); ?>
        </h1>

        <div class="pull-right columns"> 

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
            <!-- Description List -->
            
            <!-- Hotel Details List -->
            <div class="column m-1">
                <?php
                /*
                    echo "
                        <div>
                            <div> [#] Hotel Id: ". $selectedHotel->getId() ." </div>
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
                    */
                ?>
            </div>
            <!-- Hotel Details List -->

        </div>

        <div class='image-center'>
            <img 
                class="img-circle hotel-thumbnail" 
                src="<?php echo $selectedHotel->getImg(); ?>"
                alt="hotel" 
            >
        </div>

        <div class="column m-1">
            <?php
                echo "
                    <div>
                        <div> - Hotel Id: ". $selectedHotel->getId() ." </div>
                        <div> - Name: ". $selectedHotel->getName() ." </div>
                        <div> - Cost per night: R". $selectedHotel->getCostPerNight() ." </div>
                        <div>";
                            if( !$selectedHotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> - Rooms Available </span>";
                            } else {
                            echo "<span class='has-text-danger'> - No rooms available </span>";
                            }
                echo    "</div>             
                    </div>
                ";
            ?>
        </div>

        <form action="hotels.php" method="get">
            <button class="button is-danger" type="submit">Back</button>
        </form>

</body>
</html>