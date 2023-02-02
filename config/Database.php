<?php

  include_once("./api/apiLogic.php");


  $host = 'localhost';
  $dbName = 'phishdb';
  $user = 'root';
  $password = 'sdmV[TQqecJ@8_u4';

  try {
    $db = new PDO("mysql:host={$host};dbname={$dbName}", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert information gathered from GET into phishdb using named parameters
    $sql = 'INSERT INTO showinfo(date, state, city, venue) VALUES(:date, :state, :city, :venue)';
    $stmt = $db->prepare($sql);
    $stmt->execute(['date' => $date, 'state' => $state, 'city' => $city, 'venue' => $venue]);
    
  } catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit('Unable to connect to the database');
  }

?>