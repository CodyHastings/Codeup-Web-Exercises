<?php

require_once "db_connect.php";

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";