<?php
include $_SERVER['DOCUMENT_ROOT']. '/php_project/login/connect.php';

try {
  $sql = 'CREATE TABLE joke (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     joketext TEXT,
     jokedate DATE NOT NULL) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
      $pdo->exec($sql); } catch (PDOException $e)
       {  $output = 'Error creating joke table: ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
           exit(); }
$output = 'Joke table successfully created.';
   include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
 ?>
