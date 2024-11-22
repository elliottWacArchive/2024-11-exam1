<?php

function my_sort(&$arr)
{
    static $call = 0;
    $arr = array_reverse($arr);
    $call++;
    return $call;
}
