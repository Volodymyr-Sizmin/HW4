<?php
const DB_HOST = 'mysql';
const DATABASE  = 'form';
const DB_USER = 'root';
const DB_PASSWORD = 'secret';
const DSN = "mysql:host=".DB_HOST.";dbname=".DATABASE;
const DB_OPTS = [
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
];