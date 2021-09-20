<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bank";

$conn       = mysqli_connect($servername, $username, $password, $dbname);

if ($conn){
    //  echo "connection done";
}
else{
    echo"connection failed".mysqli_connect();
}
?>