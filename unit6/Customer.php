<?php

include ("Util.php");

class Customer {
    private $numOfItems;

    function __construct($numOfItems="")
    {
        if($numOfItems == "") {
            $u = new Util();
            $this->numOfItems = $u->getRandomNum() % 20;
        } 
        $this->$numOfItems = $numOfItems;
    }

    function get_numOfItems () {
        return $this->numOfItems;
    }
}
?>