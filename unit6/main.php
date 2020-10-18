<?php
include "./DressingRoom.php";

$dr = new DressingRoom();
// $rNum = getRandomNum();
$cust = new Customer(getRandomNum() % 20);

$dr->requestRoom($cust);

function getRandomNum() {
    $bytes = random_bytes(1);
    $rNum = hexdec(bin2hex($bytes));
    return $rNum;
}
?>