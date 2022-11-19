<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelCompare.com</title>
    <link rel="stylesheet" href="./css/styles.css">
    
</head>

<body>
    <header>
        <h1 class="title">
            Welcome to HotelCompare.com
        </h1>
        <p class="subtitle"> Your home for affordable hotels around the world.</p>
    </header>

<section class="app-section">
      <div id="app">
        <p class="">
            Please enter your details to compare.
        </p>
        <form action="./pages/hotels.php" method="post">
            <div class="in-form-group">
                <label for="customerName"> Enter your name:</label>
                <input type="text" name="customerName" 
                placeholder="John Doe" required>
            </div>
            <div class="in-form-group">
                <label for="customerEMail">Your Email:</label>
                <input type="email" name="customerEmail" placeholder="Johndoe@gmail.com" required>
            </div>
            <div class="in-form-group">
                <label for="checkInDate">Check In Date:</label>
                <input type="date" name="checkInDate" required>
            </div>
            <div class="in-form-group">
                 <label for="checkInDate">Check Out Date:</label>
                <input type="date" name="checkoutDate" required>
            </div>
            <button type="submit" name="submit" class="compare-button">See Comparison</button>
        </form>

    </div>
</section>
  

</body>

</html>

