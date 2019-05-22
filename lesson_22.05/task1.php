<?php

$arr = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12),
    array(13, 14, 15, 16)
);

for($i = 0; $i < count($arr); $i++) {
    for($j = 0; $j < $i; $j++) {
        echo $arr[$i][$j] . ", ";
    }
}