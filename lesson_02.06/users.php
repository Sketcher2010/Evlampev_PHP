<?php
include "../lesson_29.05/config.php";
include "User.php";

$stmt = $dbh->prepare("SELECT * FROM users");
$stmt->execute();

$users = array();

while ($userFromDb = $stmt->fetch()) {
    $user = new User(
        $userFromDb['id'],
        $userFromDb['login'],
        $userFromDb['password'],
        $userFromDb['email']
    );
    $users[] = $user;
}

foreach ($users as $user) {
    echo $user->getTwiceId()."<br>";
}
