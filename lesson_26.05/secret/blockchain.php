<?php
$num = rand();

$startHash = md5($num);
echo $startHash."\n";

for($i = 0; $i < 20; $i++) {
    $num = rand().time();
    $hash = md5($num);
    while ($hash > $startHash) {
        $num = rand().time();
        $hash = md5($num);
    }
    $startHash = $hash;
    echo $startHash."\n";
    // ПОЛУЧИЛИ МОНЕТУ!
}