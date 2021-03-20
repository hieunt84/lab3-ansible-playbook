<?php
// connect database and quyery data and output
//$connection = new PDO('mysql:host=localhost;dbname=demo', 'demo', 'demo');
//$statement  = $connection->query('SELECT message FROM demo');
//echo $statement->fetchColumn();

try {
    $db = new PDO('mysql:host=localhost;dbname=demo', 'demo', 'demo');
    echo "<h2>TODO</h2><ol>";
    foreach($db->query('SELECT message FROM demo') as $row) {
      echo "<li>" . $row['message'] . "</li>";
    }
    echo "</ol>";
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }

?>