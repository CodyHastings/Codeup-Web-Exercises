<?php

require 'Park.php';

$parks = Park::dbConnect();

var_dump($parks);