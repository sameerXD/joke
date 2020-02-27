<?php
include $_SERVER['DOCUMENT_ROOT']. '/php_project/login/connect.php';
try
{
  $sql = 'UPDATE joke SET jokedate="2012-04-01"
    WHERE joketext LIKE "%chicken%"';
     $affectedRows = $pdo->exec($sql); }
     catch (PDOException $e) {

  $output = 'Error performing update: ' . $e->getMessage();
  include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
    exit();
  }
 ?>
