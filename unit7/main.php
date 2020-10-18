<?php

$arrOf10 = [2968,52357,58018,38225,20965,26006,16474,12054,14270,19360];

$filename= "arrOf1K.txt";
$fopen = fopen($filename, "r");
$fread = fread($fopen, filesize($filename));
fclose($fopen);
$arrOf1K = [];
$remove = "\n";
$split = explode($remove, $fread);
foreach($split as &$ele) {
    settype($ele, "integer");
    array_push($arrOf1K, $ele);
}
echo var_dump($arrOf1K);
?>