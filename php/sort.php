<?php

echo "Введите число: ";
$n = (int)trim(fgets(STDIN));
$allNumber = array(); // Переменная типа "Массив"

while ($n != 0) {
    $allNumber[] = $n;
    echo "Введите число: ";
    $n = (int)trim(fgets(STDIN));
}

for ($i = 0; $i < count($allNumber); $i++) {
    for ($j = 0; $j < count($allNumber) - $i - 1; $j++) {
        if ($allNumber[$j] > $allNumber[$j + 1]) {
            $a = $allNumber[$j];
            $allNumber[$j] = $allNumber[$j + 1];
            $allNumber[$j + 1] = $a;
        }
    }
}

foreach ($allNumber as $number) {
    echo $number . " ";
}

/* 6 8 8 9 7
 * 6 8 8 9 7
 * 6 8 8 7 9
 * 6 8 7 8 9
 * 6 7 8 8 9
 *
 */
