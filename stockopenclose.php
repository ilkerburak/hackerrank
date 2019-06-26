<?php
function test($firstDate, $secondDate, $dayOfWeek)
{
    $dateList = [];
    $json = file_get_contents('https://jsonmock.hackerrank.com/api/stocks');
    $arr = json_decode($json, true);

    $first = strtotime($firstDate);
    $second = strtotime($secondDate);
    for($i = $first; $i < $second; $i = $i + 86400){
        if(date('l', $i) == $dayOfWeek){
            $dateList[] = date("j-F-Y", $i);
        }
    }

    //print_r($arr['data']);
    for($j=0; $j < count($arr['data']); $j++){

        if(in_array($arr['data'][$j]['date'], $dateList)){
            echo $arr['data'][$j]['date']." ".$arr['data'][$j]['open']." ".$arr['data'][$j]['close']."\n";
        }
    }
}

echo test("1-January-2000", "22-February-2000", "Monday");