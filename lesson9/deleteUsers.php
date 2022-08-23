<?php require_once __DIR__ . '/classes/connection.php';
require_once __DIR__ . '/vendor/autoload.php';
use classes\Users;
$query = $pdo->prepare("SELECT id FROM users ORDER BY id");
$query->execute();
$data= $query->fetchAll();
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
<form method="post" action="actions.php">
    <select name="user_delete[]" multiple >
        <?php foreach ($data as $item): ?>
        <option  value="<?= $item['id']?>"><?= $item['id']?></option>
        <?php endforeach; ?>
    </select>
    <input type="hidden" name="type" value="delete_user">
    <button type="submit">DELETE</button>
</form>

</body>
</html>

