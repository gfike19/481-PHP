<?php
include "bubbleSort.php";
include "quickSort.php";
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

$filename= "arrOf10K.txt";
$fopen = fopen($filename, "r");
$fread = fread($fopen, filesize($filename));
fclose($fopen);
$arrOf10K = [];
$remove = "\n";
$split = explode($remove, $fread);
foreach($split as &$ele) {
    settype($ele, "integer");
    array_push($arrOf10K, $ele);
}

echo "<h1>Bubble Sort</h1>";
echo "<p>Processing Time for Dataset of 10: ";
$time_pre = microtime(true);
bubbleSort($arrOf10);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p><p>Processing Time for Dataset of 1,000: ";
$time_pre = microtime(true);
bubbleSort($arrOf1K);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p><p>Processing Time for Dataset of 10,000: ";
$time_pre = microtime(true);
bubbleSort($arrOf1K);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p>";

echo "<h1>Quick Sort</h1>";
echo "<p>Processing Time for Dataset of 10: ";
$time_pre = microtime(true);
quicksort($arrOf10);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p><p>Processing Time for Dataset of 1,000: ";
$time_pre = microtime(true);
quicksort($arrOf1K);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p><p>Processing Time for Dataset of 10,000: ";
$time_pre = microtime(true);
quicksort($arrOf1K);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo $exec_time."</p>";
?>