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
                    <label for="name">Name:</label>
                    <input name="name" type="text" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Surname:</label>
                    <input name="lastname" type="text" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Enter password:</label>
                    <input name="password" type="password" required>
                </div>
                <div class="form-group">
                    <label for="passwordrepeat">Confirm password:</label>
                    <input name="passwordrepaet" type="password" required>
                </div>
    
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </section>
</body>
</html>