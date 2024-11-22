<?php

function my_count_chars(string $str, string $l)
{
    $tot = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $l) {
            $tot++;
        }
    }
    return $tot;
}
