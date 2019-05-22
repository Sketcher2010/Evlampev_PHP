<?php

$hello = "hello";
$name = "world";

if (!empty($_GET['hello'])) {
    $hello = $_GET['hello'];
}
if (!empty($_GET['name'])) {
    $name = $_GET['name'];
}
if(!empty($_GET['hello']) or !empty($_GET['name'])) {
    echo "$hello $name!";
}
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form>
        <input
            type="text"
            name="hello"
            placeholder="Приветствие"
            <?php if(!empty($_GET['hello'])) { ?>
                value="<?=$_GET['hello'] ?>"
            <?php } ?>
        ><br>
        <input
            type="text"
            name="name"
            placeholder="Имя"
            <?php if(!empty($_GET['name'])) { ?>
                value="<?=$_GET['name'] ?>"
            <?php } ?>
        ><br>
        <input type="submit"><br>
    </form>
</body>
</html>