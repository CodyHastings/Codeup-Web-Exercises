<?php 



$dbc = new PDO("mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DBNAME, DB_USERNAME, DB_PASSWORD);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

