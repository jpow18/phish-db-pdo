<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'sdmV[TQqecJ@8_u4';

  // set DSN (data source name)
  //$dsn = 'mysql:host' . $host . ';dbname=' . $dbname;
  
  // connect to myphpadmin and create phishDB if connection is 
  // successful
  try {
    $connection = new PDO('mysql:host=$host', $user, $password);
    // Set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'CREATE DATABASE phishDB';
  } catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit('Unable to connect to the database');  
  }

  echo "HI';";

  $connection = null;
?>