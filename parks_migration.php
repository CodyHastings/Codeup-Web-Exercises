<?php

require_once "park_logins.php";
require_once "db_connect.php";



$message = 'drop table if exists national_parks;
create table if not exists national_parks(
  id int unsigned not null auto_increment,
  name varchar(150) not null,
  location varchar(300) not null,
  date_established date not null,
  area_in_acres double(12,2) not null,
  description varchar(400),
  primary key (id)
);';

$dbc->exec($message);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";