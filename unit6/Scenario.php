<?php

include_once ("Customer.php");
include_once ("DressingRoom.php");

class Scenario {

    public $numOfRooms;
    public $numOfCusts;
    public $maxNumOfItems;
    public $dr;
    public $custArr;

    function __construct($numOfRooms=3, $maxNumOfItems=6, $numOfCusts)
    {
        $this->numOfRooms = $numOfRooms;
        $this->numOfCusts = $numOfCusts;
        $this->maxNumOfItems = $maxNumOfItems;

        $this->dr = new DressingRoom($this->numOfRooms);
        $this->custArr = [];
        for($i = 0; $i < $this->numOfCusts; $i++) {
            $c = new Customer($this->maxNumOfItems);
            array_push($this->custArr, $c);
        }
    }

    function run() {
        echo "Running scenario. . .<br>";
        echo "Number of rooms: ".$this->numOfRooms."<br>";
        echo "Number of customers: ".$this->numOfCusts."<br>";

        for($i = 0; $i < sizeof($this->custArr); $i++) {
            $c = $this->custArr[$i];
            // $itemCount = $c->numOfItems;
            // echo "Customer ".($i + 1)." has ".$itemCount." number of items<br>";
            $this->dr->requestRoom($c);
        }
    }

    function displayCusts() {

        for($i = 0; $i < sizeof($this->custArr); $i) {
            $c = $this->custArr[$i];
            echo $c->get_numOfItems()."<br>";
        }
    }
    
}
?>