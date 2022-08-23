<?php require_once __DIR__ . '/classes/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="actions.php">
    <label> Enter your name:</label><br>
    <input type="text" name="name"><br>
    <br>
    <label> Enter your surname:</label><br>
    <input type="text" name="surname"><br>
    <br>
    <label> Enter your age:</label><br>
    <input type="text" name="age"><br>
    <br>
    <label> Enter your e-mail</label><br>
    <input type="text" name="email"><br>
    <input type="hidden" name="type" value="new_row">
    <br>
    <input type="submit"  value="Add to table">

</form>

</body>
</html>

