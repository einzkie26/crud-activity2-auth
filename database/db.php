<?php

try {

  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "fillup_auth";


  $conn = new mysqli($host, $username, $password, $database);

  if ($conn->connect_error) {
    die("Database connection unsuccessful" . $conn->connect_error);
    return;
  }

  // echo "database connection success";


} catch (\Exception $e) {
  echo "Error: " . $e;
}
