<?php

echo "Введите число: ";
$n = (int)trim(fgets(STDIN));
$allNumber = array(); // Переменная типа "Массив"

while ($n != 0) {
    $allNumber[] = $n;
    echo "Введите число: ";
    $n = (int)trim(fgets(STDIN));
}

$max = 0;

foreach ($allNumber as $number) {
    if($number > $max) {
        $max = $number;
    }
}

echo "Максимальное число: $max";
