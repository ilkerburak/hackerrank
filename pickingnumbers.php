<?php
// https://www.hackerrank.com/challenges/picking-numbers

function pickingNumbers($a) {
    sort($a);
    $max = 0;
    for($i = 0; $i < count($a) - 1; $i++){
        $count = 1;
        for($j = $i + 1; $j < count($a); $j++){
            if(abs($a[$i] - $a[$j]) <= 1 && abs($a[$i] - $a[$j]) <= 1){
                $count++;
            } else {
                break;
            }
        }
        if($count > $max) $max = $count;
    }
    return $max;
}