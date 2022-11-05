<?php

if (isset($_POST['submit'])) {

        $user_name = $_POST['name'];
        $user_lastname = $_POST['lastname'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $user_password_repeat = $_POST['password_repeat'];

        include "../classes/signup.cntrl.class.php";
        include "../classes/signup.class.php";

        $signUp = new signUp ($user_name, $user_lastname, $user_email, $user_password, $user_password_repeat);
}