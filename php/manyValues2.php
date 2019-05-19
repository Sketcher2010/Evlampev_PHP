<?php

echo "Введите число: ";
$n = (int)trim(fgets(STDIN));

$sum = 0;

while ($n != 0) {
    $sum = $sum + $n;

    echo "Введите число: ";
    $n = (int)trim(fgets(STDIN));
}

for ($i = 0; $i < $sum; $i++) {
    echo "*";
}