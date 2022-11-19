<?php

require_once __DIR__ . "/Hotel.php";
require_once __DIR__ . "/User.php";

// Dependancy Injection: 

class Booking {

    public User $user;
    public Hotel $hotel;

    public function __construct($user, $hotel) {
        $this->user = $user;
        $this->hotel = $hotel;
    }
    
}