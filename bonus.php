<?php

for ($i = 1; $i < $argc; $i++) {
    echo md5($argv[$i]) . PHP_EOL;
}
