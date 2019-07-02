<?php

function optimalPoint($magic, $dist) {
    for($start = 0; $start < count($magic); $start++){ //try count
        $curMagic = $magic[$start];
        for ($i = 0; $i < count($dist); $i++) {
            $start++;
            if($start == count($magic)) $start = 0; // for circle
            $curMagic = $curMagic + $magic[$start] - $dist[$i];

            if ($dist[$i] > $curMagic) {
                if($start != count($magic) -1) $start--;
                continue 2;
            }
        }
        if($curMagic >= 0) {
            return $start;
        }
    }

    return -1;
}

$magicArr = [8,4,1,9];
$distArr = [10,9,3,5];

echo optimalPoint($magicArr, $distArr);
