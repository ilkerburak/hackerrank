<?php
function numberOfWays($cases) {
    $result = [];
    for($i=0; $i < count($cases); $i++) {
        $count = 0;
        $minEdge = ($cases[$i][0] < $cases[$i][1]) ? $cases[$i][0] : $cases[$i][1];
        $row = $cases[$i][0];
        $column = $cases[$i][1];
        for($dimension =  1; $dimension <= $minEdge; $dimension++){
            for($x = 0; $x < $row; $x++){
                for($y = 0; $y < $column; $y++){
                    if($x + $dimension > $row || $y + $dimension > $column) {
                        continue;
                    } else {
                        $count++;
                    }
                }
            }
        }
        $result[] = $count;
    }
    return $result;
}

print_r(numberOfWays([2,2,'2 1', '2 3']));