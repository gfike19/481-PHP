<?php

include ("Customer.php");
include ("Util.php");

class DressingRoom {

    private $numofRooms;
    function __construct($numofRooms = 3)
    {
        $this->numofRooms = $numofRooms;
    }

    function requestRoom(Customer $cust) {
        $min = 60;
        
        if($this->numofRooms != 0) {
            $this->numofRooms--;
            $numOfItems = $cust->numOfItems;
            $u = new Util();
            $numOfMins = $u->getRandomNum() % 3;
            sleep(($numOfMins * $min) * $numOfItems);
            $this->numofRooms++;
        } else {
            sleep($min);
        }
    }
}
?>