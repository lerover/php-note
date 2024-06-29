<?php

ini_set('display_errors','1');

$host = "localhost";
$dbname = "php-note";
$dbuser = "root";
$dbpass = "allendb@1155";

$db = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);

