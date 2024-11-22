<?php

function my_sort(&$arr)
{
    static $call = 0;
    $n = count($arr);
    $a = $arr[$n - 1];
    $arr[$n - 1] = $arr[0];
    $arr[0] = $a;
    $call++;
    return $call;
}
