<?php

function quicksort($array) {
    if(count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivotKey = key($array);
    $pivot = array_shift($array);
    foreach($array as $k => $v) {
        if($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(quicksort($left),array($pivotKey => $pivot), quicksort($right));
}

?>