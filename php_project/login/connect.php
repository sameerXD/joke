<?php try {  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdbuser1',    'samplaywithcode@866');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
 }
 catch (PDOException $e) {

  $output = 'Unable to connect to the database server.';
   include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
    exit();
   }
$output = 'Database connection established.';
    include $_SERVER['DOCUMENT_ROOT']. '/php_project/output/output.html.php';
