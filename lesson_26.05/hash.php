<?php

$password = "PashaTheBest";


echo $password . "\n";

$salt = "qeqasd32r4 rt34et tretg";

$password = md5($password . $salt);
echo $password;