<?php

$host = "localhost:3306"; /* Host name */
$user = "xmlhtjs"; /* User */
$password = "0ym?UZn7iBub0nue"; /* Password */
$dbname = "card_1x4"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
session_start();

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}