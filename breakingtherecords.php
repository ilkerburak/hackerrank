<?php
// https://www.hackerrank.com/challenges/breaking-best-and-worst-records

function breakingRecords($scores) {
    $countHighest = 0;
    $countLowest = 0;
    $tmpScores = [];

    for($i = 0; $i < count($scores); $i++){
        if(!isset($highest) && !isset($lowest)){
            $highest = $scores[$i];
            $lowest = $scores[$i];
            $tmpScores[] = $scores[$i];
        } else {
            sort($tmpScores);
            if($scores[$i] < $tmpScores[0]) {
                $countLowest++;
            } else if($scores[$i] > $tmpScores[count($tmpScores) - 1]) {
                $countHighest++;
            }

            $tmpScores[] = $scores[$i];
        }
    }

    return [$countHighest, $countLowest];
}
