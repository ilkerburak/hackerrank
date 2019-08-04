<?php
// https://www.hackerrank.com/challenges/counting-valleys

function countingValleys($n, $s) {
    $count = 0;
    $arr = str_split($s);
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == "U") $arr[$i] = 1;
        if($arr[$i] == "D") $arr[$i] = -1;
    }

    array_push($arr, 0);
    array_unshift($arr, 0);

    $level = 0;
    $start = 0;
    $end = 0;
    for($i = 1; $i < count($arr) - 1; $i++){
        if($level == 0){
            $start = 1;
        }
        if($arr[$i] == 1 && $level == -1 && $start == 1){
            $start = 0;
            $count++;
        }
        $level = $level + $arr[$i];
    }

    return $count;
}