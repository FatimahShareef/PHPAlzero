<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


/*
$dsn = 'mysql:host-localhost;dbname = classicmodels'; // datasouce name include host, dbname
$user = 'root';
*/
$password = '' ;

try {
    $conn = new PDO("mysql:host=localhost;dbname=classicmodels", $username ='root', $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

      // sql to create table
    $sql = "CREATE TABLE  IF NOT EXISTS NewServer (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
  //$conn->exec($sql);
  
  $sql1 = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";

$sql3 = "UPDATE MyGuests SET firstname = 'layan' ,lastname = 'youesf' where id=5 ";
  if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully" . $sql1 . "helllllo";
  } 

  $conn->exec($sql3);
  $sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('yamen', 'yaman', 'yaman@example.com');";
 $conn->exec($sql2);



  $last_id = $conn->lastInsertId();
  echo '<br>'. "New record created successfully. Last inserted ID is: " . $last_id;


  $stmt = $conn->prepare("SELECT id,firstname,lastname FROM MyGuests ");
  $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }


$sql = "DELETE From MyGuests Where id = 50";
$conn->exec($sql);


} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }










  
?>