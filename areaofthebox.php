<?php
function numberOfWays($cases) {
    $result = [];

    for($i=2; $i < count($cases); $i++) {
        $count = 0;
        $arr = explode(" ", $cases[$i]);

        $minEdge = ($arr[0] < $arr[1]) ? $arr[0] : $arr[1];

        $row = $arr[0];
        $column = $arr[1];

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
print_r(numberOfWays([2,2,'3 4','6 5']));
