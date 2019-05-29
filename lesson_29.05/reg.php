<?php
$login = $_POST["login"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$email = $_POST["email"];
if ($password != $password2) {
    echo "Пароли должны совпадать!";
    die();
}
include "config.php";
$stmt = $dbh->prepare("INSERT INTO 
`users`(`login`, `password`, `email`) 
VALUES (?, ?, ?)");
$stmt->execute(array(
    $login,
    md5($password),
    $email
));
if ($stmt->errorCode() == "00000") {
    echo "Успешная регистрация!";
} else {
    echo $stmt->errorInfo()[2];
}
