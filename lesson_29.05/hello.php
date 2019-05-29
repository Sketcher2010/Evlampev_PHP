<?php
include "config.php";
include "visits.php";

if(isset($_SESSION["id"]) and !empty($_SESSION["id"])) {
    echo "Привет, твой ID: ".$_SESSION["id"];
} else {
    echo "Войдите в свой аккаунт, пожалуйста! 3(";
}