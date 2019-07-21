<?php
/*
Little Bobby loves chocolate. He frequently goes to his favorite  store, Penny Auntie, to buy them. They are having a promotion at Penny Auntie. If Bobby saves enough wrappers, he can turn them in for a free chocolate.

For example, Bobby has  to spend on bars of chocolate that cost  each. He can turn in  wrappers to receive another bar. Initially, he buys  bars and has  wrappers after eating them. He turns in  of them, leaving him with , for more bars. After eating those two, he has  wrappers, turns in  leaving him with  wrapper and his new bar. Once he eats that one, he has  wrappers and turns them in for another bar. After eating that one, he only has  wrapper, and his feast ends. Overall, he has eaten  bars.

Function Description

Complete the chocolateFeast function in the editor below. It must return the number of chocolates Bobby can eat after taking full advantage of the promotion.
*/

function chocolateFeast($n, $c, $m) {
    $count = 0;
    $wrapper = 0;
    while($n >= $c){
        $cur = floor($n  / $c);
        $count = $count + $cur;
        $n = $n - ($cur * $c);

        $wrapper = $wrapper + $cur;
        if($wrapper >= $m){
            $freeCount = floor($wrapper / $m);
            $wrapper = $wrapper - ($freeCount * $m);
            $n = $n + ($freeCount * $c);
        }
        echo $n."\n";
    }
    return $count;
}