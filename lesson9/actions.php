<?php

use classes\Users;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/classes/connection.php';

if (!empty($_POST['type'])){
    switch ($_POST['type']){
        case 'create_table': {
            Users::tableCreate($pdo);
        } break;
        case 'get_info': {
           Users::getInfo($pdo);
        } break;
        case 'new_row': {
            Users::newRow($pdo);
        } break;
        case 'delete_user': {
            Users::deleteUser($pdo);
        }
    }
}
?>
<ul>
    <li><a href="form.php"> Add new User</a></li>
    <li><a href="infoUsers.php"> See information about Users</a></li>
    <li><a href="deleteUsers.php"> Delete Users</a></li>
</ul>

