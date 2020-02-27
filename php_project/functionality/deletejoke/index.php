<?php
include $_SERVER['DOCUMENT_ROOT']. '/php_project/login/connect.php';
if (isset($_GET['deletejoke'])) {
  try  {
       $sql = 'DELETE FROM joke WHERE id = :id';
       $s = $pdo->prepare($sql);
       $s->bindValue(':id', $_POST['id']);
       $s->execute();
      }
      catch (PDOException $e)
      {$output = 'Error deleting joke: ' . $e->getMessage();
       include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
       exit();
     }
     header('Location: .');
     exit();
    }
    try {
       $sql = 'SELECT id, joketext FROM joke';
         $result = $pdo->query($sql);
        }
         catch (PDOException $e) {
            $output = 'Error fetching jokes: ' . $e->getMessage();
              include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
                exit();
             }
while ($row = $result->fetch()) {
   $jokes[] = array('id' => $row['id'],
   'text' => $row['joketext']);
  }
     include $_SERVER['DOCUMENT_ROOT']. '/php_project/functionality/deletejoke/form.html.php';

 ?>
