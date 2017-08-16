<?php 

require_once "Model.php";

$data = new Model();

echo "username is " . $data->username . PHP_EOL;

$data->username = "bobbyTables";

echo "username is " . $data->username . PHP_EOL;