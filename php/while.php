<?php


echo "Введите число: ";
$usersNumber = (int)trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    echo "$usersNumber * $i = " . $usersNumber * $i . "\n";
}
