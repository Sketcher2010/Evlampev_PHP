<?php
if (
    !empty($_GET["number1"])
    and !empty($_GET["action"])
    and !empty($_GET["number2"])
) {
    include "Calculator.php";
    $calc = new Calculator($_GET["number1"], $_GET["number2"], $_GET["action"]);
    $calc->doAction();
    echo $calc->getAction();
}
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form>
    <input type="text" name="number1" required>
    <select name="action" required>
        <option value="+"
            <?php if (!empty($_GET['action']) and $_GET["action"] == "+") { ?>
                selected
            <?php } ?>
        >+
        </option>
        <option value="-"
            <?php if (!empty($_GET['action']) and $_GET["action"] == "-") { ?>
                selected
            <?php } ?>
        >-</option>
        <option value="*"
            <?php if (!empty($_GET['action']) and $_GET["action"] == "-") { ?>
                selected
            <?php } ?>
        >*</option>
        <option value="/"
            <?php if (!empty($_GET['action']) and $_GET["action"] == "-") { ?>
                selected
            <?php } ?>
        >/</option>
    </select>
    <input type="text" name="number2" required>
    <br>
    <input type="submit">
</form>
</body>
</html>
