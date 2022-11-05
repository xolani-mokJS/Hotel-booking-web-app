<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    *{
        box-sizing: border-box;
        margin: 0;
    }

    .header-section{
        background-color: #E7EF89;
        padding: 25px;
        text-align: center;
    }

    h1{
        font-weight: 700;
        font-size: 45px;
    }

    .body-section{
        background-color: #FFFFFF;
        padding: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 700px;
        background-color: #efefee;
        padding: 25px;
        border-radius: 15px;
    }

    .form-group{
        padding: 15px;
        margin: 10px;
    }

    button{
        margin: 10px;
        padding: 15px;
        border-radius: 15px;
        color: #E7EF89;
        background-color: blue;
        font-weight: bold;
        border: none;
        font-size: 25px;
    }

    input{
        border: none;
        border-radius: 15px;
        padding: 10px;
    }

    label{
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 18px;
        color: black;
    }

</style>


    <section class="header-section">
        <h1>HotelCompare.com</h1>
        <p>Compare hotel prces to get the best  price on the market</p>
    </section>
    <section class="body-section">
        <div class="container">
            <form action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text">
                </div>
                <div class="form-group">
                    <label for="lastname">Surname:</label>
                    <input name="lastname" type="text">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email Address:</label>
                    <input name="emailAddress" type="email">
                </div>
                <div class="form-group">
                    <label for="password">Enter password:</label>
                    <input name="password" type="password">
                </div>
                <div class="form-group">
                    <label for="password2">Confirm password:</label>
                    <input name="password2" type="password">
                </div>
    
                <button type="submit">Sign up</button>
            </form>
        </div>
    </section>
</body>
</html>