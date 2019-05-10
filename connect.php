<?php
$dbName = '410project';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'MyNewPass';

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
