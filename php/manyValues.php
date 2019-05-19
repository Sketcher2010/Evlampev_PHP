<?php

echo "Введите количество чисел: ";
$n = (int)trim(fgets(STDIN));
$sum = 0;
for($i = 0; $i < $n; $i++) {
    echo "Введите число: ";
    $number = (int)trim(fgets(STDIN));
    $sum = $sum + $number;
}
echo $sum;