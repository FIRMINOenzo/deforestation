<?php

$count = 1;

function connectDatabase()
{
  global $count;

  try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    return $conn;
  } catch (Exception $e) {
    if ($count < 3) {
      $count++;
      return connectDatabase();
    }

    return "Failed connection: " . $e->getMessage();
  }
}
