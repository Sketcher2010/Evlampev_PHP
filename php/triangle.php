<?php

echo "Введите количество выполнений: ";
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";
}