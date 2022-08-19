<?php require_once __DIR__ . '/classes/connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php
function tableExist($pdo): bool
{
   $query = $pdo->prepare('SHOW TABLES LIKE "users"');
   $query->execute();
   return boolval($query->fetch());
}

if (!tableExist($pdo)): ?>
<form method="post" action="actions.php">
<input type="submit" name="create" value="Create table">
<input type="hidden" name="type" value="create_table">
</form>
<?php else: ?>
<h1>"table exists"</h1>
<ul>
    <li><a href="form.php"> Add new User</a></li>
    <li><a href="infoUsers.php"> See information about Users</a></li>
    <li><a href="deleteUsers.php"> Delete Users</a></li>
</ul>

<?php endif;?>
</body>
</html>

