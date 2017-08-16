<?php 

require_once "Model.php";
require_once "User.php";

$data = new Model();

echo "username is " . $data->username . PHP_EOL;

$data->username = "bobbyTables";

echo "username is " . $data->username . PHP_EOL;

echo "the table name is " . User::getTableName() . PHP_EOL;
