<?php 
require_once "park_logins.php";


$connection = new PDO("mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DBNAME, DB_USERNAME, DB_PASSWORD);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

