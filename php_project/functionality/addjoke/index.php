<?php
if (isset($_GET['addjoke'])) {
   include 'form.html.php';
   exit();
 }

 if (isset($_POST['joketext'])) {
     try  {
         $sql = 'INSERT INTO joke SET
         joketext = :joketext,
         jokedate = CURDATE()';
         $s = $pdo->prepare($sql);
         $s->bindValue(':joketext', $_POST['joketext']);
         $s->execute();
       }
       catch (PDOException $e)  {
       $output = 'Error adding submitted joke: ' . $e->getMessage();
       include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php'; 
       exit();
      }
    header('Location: .');
     exit();
    }





  ?>
