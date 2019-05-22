<?php

$allNumber = array(58,864,1,5,3418,15,84,35,40,48);
$allNumber2 = array(851,884,1,8,84,54);

sortToTop($allNumber, "; ");
sortToTop($allNumber2, ", ");

function sortToTop($arr, $glue) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $a = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $a;
            }
        }
    }

    foreach ($arr as $number) {
        echo $number . $glue;
    }
    echo "\n";
}

