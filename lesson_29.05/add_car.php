<html>
<head>
    <title>Добавление машины в базу данных!</title>
</head>
<body>
<form action="add_car_logic.php" method="post">
    <input type="text" name="model" placeholder="Model"><br>
    <input type="number" min="0" max="100000000" name="price" placeholder="price"><br>
    <input type="number" min="1" max="4" name="owner_id" placeholder="Владелец"><br>
    <input type="submit">
</form>
</body>
</html>
