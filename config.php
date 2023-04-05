

<?php

$db_host = "eu-cdbr-west-03.cleardb.net";
$db_user = "b468cf9ba23d30";
$db_pass = "7b09a29d";
$db_name = "heroku_a53fb3fcd02a2c1";

// Create connection
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}




?>