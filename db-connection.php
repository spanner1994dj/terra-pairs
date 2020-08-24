<!-- <?php

// try{
//     $db = new PDO("mysql:host=localhost;dbname=db", "root", "");
// } catch (Exception $e){
//     echo $e->getMessage();
// }

?> -->


  
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    number VARCHAR(15) NOT NULL,
    subject CHAR(100) NOT NULL,
    message MEDIUMTEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table messages created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>