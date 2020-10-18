<?php

class Customer {
    public $numOfItems;

    function __construct($numOfItems="")
    {
        if($numOfItems == "") {
            $this->numOfItems = $this->getRandomNum() % 20;
        } 
        $this->$numOfItems = $numOfItems;
    }

    function get_numOfItems () {
        return $this->numOfItems;
    }

    function getRandomNum() {
        $bytes = random_bytes(1);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }
}
?>