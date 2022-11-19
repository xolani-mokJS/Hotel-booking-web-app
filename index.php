<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="header-section">
        <h1>HotelCompare.com</h1>
        <p>Compare hotel prices to get the best value on the market</p>
    </section>
    <section class="body-section">
        <div class="container">
            <form action="" method="post">
            <h3>Please fill on your information to get hotel comparison</h3>
                <div class="form-group">
                <form action="./pages/Hotels.pages.php" method="post">
                <label for="customerName"> Your name and surname:</label>
                <input type="text" name="customerName" placeholder="John doe" required>
                <label for="email"> Email Address:</label>
                <input type="email" name="customerEmail" placeholder="Johndoe@email.com" required>

                <label for="checkInDate">Check In Date</label>
                <input type="date" name="checkInDate" required>
                <label for="checkInDate">Check Out Date</label>
                <input type="date" name="checkoutDate" required>
                <button type="submit" name="submit" class="button is-danger">View Hotels</button>
        </form>
        </div>
    </section>
</body>
</html>