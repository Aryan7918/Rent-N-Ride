<?php

define("DB_SERVER","localhost:3307");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_DATABASE","car_rental");

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>