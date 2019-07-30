<?php
/*
https://www.hackerrank.com/challenges/encryption/problem
*/
function encryption($s) {
    $s = preg_replace('/\s/', '', $s);
    $length = strlen($s);
    $rows = floor(sqrt($length));
    $columns =  ceil(sqrt($length));

    if($rows * $columns < $length){
        ($rows > $columns) ? $columns++ : $rows++;
    }
    $start = 0;
    for($i = 0; $i < $rows; $i++){
        $slicedArr[] = substr($s, $start, $columns);
        $start = $start + $columns;
    }

    $retStr = "";
    for($i = 0; $i < $columns; $i++){
        $start = 0;
        for($j = 0; $j < $rows; $j++){
            $retStr .= $slicedArr[$j][$i];
        }
        $retStr .= " ";
    }

    return $retStr;
}