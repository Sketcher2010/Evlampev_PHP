<?php
session_start();
include "config.php";

$login = $_POST["login"];
$password = md5($_POST["password"]);

$stmt = $dbh->prepare("SELECT * FROM users 
        WHERE login = ? and password = ?");
$stmt->execute(array(
    $login,
    $password
));

if($stmt->rowCount() == 1) {
    $user = $stmt->fetch();
    $_SESSION["id"] = $user["id"];
    echo "Успешная авторизация";
} else {
    echo "Проверьте правильность ввода логина и пароля";
}