<?php

include_once ("Customer.php");

class DressingRoom {

    public $numofRooms;
    function __construct($numofRooms = 3)
    {
        $this->numofRooms = $numofRooms;
    }

    function requestRoom(Customer $cust) {
        $min = 60;
        
        if($this->numofRooms != 0) {
            $this->numofRooms--;
            $numOfItems = $cust->numOfItems;

            $numOfMins = $this->getRandomNum() % 3;
            echo "Customer enters room at: ".date("H:i:s")."<br>";
            sleep(($numOfMins * $min) * $numOfItems);
            $this->numofRooms++;
            echo "Customer exits room at: ".date("H:i:s")."<br>";
        } 
        if($this->numofRooms == 0) {
            echo "Waiting for room<br>";
            sleep($min);
        }
    }

    function getRandomNum() {
        $bytes = random_bytes(1);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }
}
?>