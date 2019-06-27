<?php
function optimalPoint($magic, $dist) {
    $index = 0; // magic index
    $visited = 0;// visited counter, if equals to total distance return magic index
    $try = 0;  // counter to make sure we tried all magic sources

    while ($try < count($magicArr)){ //try magic count  times
        if($visited == count($dist)) return $index;
        $visited++;

        for($j = 0; $j < count($dist); $j++) {
            $tmpMagic = $magicArr[$index];
            $tmpMagic += $magicArr[$index + 1] - $dist[$j+ 1];
            if($tmpMagic < $dist[$visited + 1]) break;  // start with next source
        }

        $index++;
        if($index == count($magicArr)) $index = 0;
        $try++;
    }

    return -1;
}

$magicArr = [2, 4, 5, 2];
$distArr = [4, 3, 1, 3];

echo optimalPoint($magicArr, $distArr);