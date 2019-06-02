<?php
include "config.php";

$stmt = $dbh->prepare("SELECT * FROM users 
right join cars on users.id = cars.owner_id");

$stmt->execute();

while ($car = $stmt->fetch()) {
    echo $car["model"] . "<br>";
    if ($car["owner_id"] != null) {
        echo "---" . $car["login"] . "<br>";
    }
}