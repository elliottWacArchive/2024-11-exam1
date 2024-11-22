<?php

function my_sort(&$arr)
{
    static $call = 0;
    $i = 0;
    $first = 0;
    $last = 0;

    foreach ($arr as $key => $value) {
        if ($i == 0) {
            $first = $key;
        }
        if ($i == (count($arr) - 1)) {
            $last = $key;
        }
        $i++;
    }
    $switch = $arr[$first];
    $arr[$first] = $arr[$last];
    $arr[$last] = $switch;
    $call++;
    return $call;
}
