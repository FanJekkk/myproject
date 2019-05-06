<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'example';

$link = mysqli_connect($dbhost, $dbuser, $dbpassword);

mysqli_select_db($link, $dbname);


?>