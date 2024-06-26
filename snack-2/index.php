<?php 

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <label for="name">nome utente</label>
        <input type="text" name="name" id="name">
        <label for="mail">email utente</label>
        <input type="text" name="mail" id="mail">
        <label for="age">eta' utente</label>
        <input type="text" name="age" id="age">
        <button type="submit">accedi</button>
    </form>
    <p><?php echo $name ?></p>
    <p><?php echo $mail ?></p>
    <p><?php echo $age ?></p>
</body>
</html>