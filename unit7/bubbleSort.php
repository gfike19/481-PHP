<?php

function bubbleSort($arr) {
    $len = sizeof($arr);
    $isSorted = false;

    while(!$isSorted) {
        $nSwaps = 0;
        for($i = 0; $i < $len - 1; $i++) {
            $current = $arr[$i];
            $next = $arr[$i + 1];

            if($current > $next) {
                $temp = $next;
                $arr[$i + 1] = $current;
                $arr[$i] = $temp;
                $nSwaps ++;
            }

            if($nSwaps == 0) {
                $isSorted = true;
            } else {
                $isSorted = false;
            }
        }
    }
    return $arr;
}
?>