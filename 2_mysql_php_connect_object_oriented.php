<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// create database
$sql = "CREATE DATABASE IF NOT EXISTS fruits_store";

if($conn->query($sql) === TRUE){
echo '<br>'."database connected successfully";
$conn->select_db("fruits_store");


}else {
    echo "error creating database " .$conn->$error;
}

$tableNew = "CREATE TABLE  IF NOT EXISTS store (
    id INT(6) AUTO_INCREMENT  NOT NULL ,
    firstname VARCHAR(15) NOT NULL,
    lastname VARCHAR(15) NOT NULL
    )";
    
if($conn->query($tableNew) === TRUE){
        echo "the new table is created";
    
    }
else{
        echo "something was happend, please review again";
    
    }

$id = array(1,4,5);
$first_name = array("ahmad","ali","mohammed");
$lastname = array("qusai","omar","whheed");

foreach ($id as $id_s => $value){
    echo $id_s;
    $sql = "INSERT INTO store(id,firstname,lastname) VALUES ($id[$id_s],
    '$first_name[$id_s]','$lastname[$id_s]')";
    $response = mysqli_query($conn, $sql);

}

$conn->close();