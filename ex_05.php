<?php

function rotone($str)
{
    $lowstr = strtolower($str);
    $newstr = "";
    for ($i = 0; $i < strlen($lowstr); $i++) {
        if ($lowstr[$i] == "z") {
            $newstr = $newstr . "a";
        } elseif (($lowstr[$i] >= 'a') && ($lowstr[$i] <= 'y')) {
            $asciival = ord($lowstr[$i]);
            $newchar = chr($asciival + 1);
            $newstr = $newstr . $newchar;
        } else {
            $newstr = $newstr . $lowstr[$i];
        }
    }
    echo "$newstr\n";
}
