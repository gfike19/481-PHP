<?php

include_once("Customer.php");

class DressingRoom
{

    public $numofRooms;
    function __construct($numofRooms = 3)
    {
        $this->numofRooms = $numofRooms;
    }

    function requestRoom(Customer $cust)
    {
        // echo "Customer has ".$cust->numOfItems." items<br>";
        $numOfMins = $this->getRandomNum() % 4;
        $enterTime = date("H:i:s");
        $enterTime->add(new DateInterval('PT', $numOfMins.'M'));
        // echo "Enter time is: " . $enterTime, "<br>"; 
        // settype($waitTime, "date interval");
        // echo "Wait time is: " . $waitTime . "<br>";
        // echo "Customer will enter room at: ".$enterTime."<br>";
        // echo "Customer will exit at ".$exitDate;
    }

    function getRandomNum()
    {
        $bytes = random_bytes(1);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }
}
