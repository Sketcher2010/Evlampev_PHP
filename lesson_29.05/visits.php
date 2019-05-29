<?php
session_start();
$stmt = $dbh->prepare("INSERT INTO visits 
(`time`, `url`, `referer`, `user_id`)
VALUE (?, ?, ?, ?)");
$stmt->execute(array(
    time(),
    $_SERVER["REQUEST_URI"],
    $_SERVER["HTTP_REFERER"],
    $_SESSION["id"]
));
