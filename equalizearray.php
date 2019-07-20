<?php
/*
 * Karl has an array of integers. He wants to reduce the array until all remaining elements are equal. Determine the minimum number of elements to delete to reach his goal.
For example, if his array is , we see that he can delete the  elements  and  leaving . He could also delete both twos and either the  or the , but that would take  deletions. The minimum number of deletions is .
*/

function equalizeArray($arr) {
    if(isEqual($arr)) return 0;

    $hash = [];
    for($i = 0; $i < count($arr); $i++){
        (!isset($hash[$arr[$i]])) ? $hash[$arr[$i]] = 1 : $hash[$arr[$i]]++;
    }
    asort($hash);
    $count = 0;
    $tmpArr = $arr;
    foreach($hash as $key=>$value){
        while($value > 0){
            $index = array_search($key, $tmpArr);
            unset($tmpArr[$index]);

            $count++;
            $tmpArr = array_values($tmpArr);
            if(isEqual($tmpArr)) {
                return $count;
            }
            $value--;
        }
    }
}

function isEqual($arr){
    if(count($arr) == 1) return true;
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] != $arr[$i - 1]) return false;
    }

    return true;
}