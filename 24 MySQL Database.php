<?php
echo "Welcome to MySQL <br>";
/*
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Datebase
$servername="localhost";
$username="root";
$password="";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


?>