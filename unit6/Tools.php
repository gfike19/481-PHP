<?php
class Tools {

    function getRandomNum() {
        $bytes = random_bytes(1);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }
}
?>