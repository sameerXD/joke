<?php
try {
  $sql = 'SELECT joketext FROM joke';
   $result = $pdo->query($sql);
  } catch (PDOException $e) {
     $output = 'Error fetching jokes: ' . $e->getMessage();
       include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
      exit();
    }
while ($row = $result->fetch()) {
   $jokes[] = $row['joketext'];
 }

include $_SERVER['DOCUMENT_ROOT']. '/php_project/functionality/listjokes/jokes.html.php';


 ?>
