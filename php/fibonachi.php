<?php

echo "Введите количество выполнений: ";
$usersNumber = (int)trim(fgets(STDIN));

if($usersNumber < 2) {
    echo "Число должно быть больше 2";
    die();
}

$first = 1;
$second = 1;

for ($i = 2; $i <= $usersNumber; $i++) {
    $currentNumber = $first + $second;
    $second = $first;
    $first = $currentNumber;
}
echo $first."\n";

// 1 1 2 3 5 8 13...