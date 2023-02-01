<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'sdmV[TQqecJ@8_u4';
  $dbname = 'phishdb';

  try {
  // create connection
  $connection = new PDO("mysql:=$servername;dbname=$dbname", $username, $password);
  // Set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE ShowInfo (
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    state VARCHAR(20),
    city VARCHAR(50),
    venue VARCHAR(100) 
    )";

    // use exec() because no results are returned
    $connection->exec($sql);
    echo "Table ShowInfo created successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


?>