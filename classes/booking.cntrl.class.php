<?php

require_once __DIR__ . "/hotel.class.php";
require_once __DIR__ . "/User.class.php";


class Booking {

    public User $user;
    public Hotel $hotel;

    public function __construct($user, $hotel) {
        $this->user = $user;
        $this->hotel = $hotel;
    }
    
}