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
            echo "Customer has ".$cust->numOfItems." items<br>";
            $numOfMins = $this->getRandomNum() % 3;
            echo $numOfMins;
            $enterTime = date("H:i:s");
            echo "Customer will enter room at: ".$enterTime."<br>";
            // $waitTime = settype(($numOfMins * $min) * $cust->numOfItems, );
            $exitDate = strtotime(settype($waitTime, "string"), $enterTime);
            echo "Customer will exit at ".$exitDate;
            // $this->numofRooms++;
            // echo "Customer exits room at: ".date("H:i:s")."<br>";
        } 

    }

    function getRandomNum() {
        $bytes = random_bytes(1);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }
}
?>