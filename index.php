<?php

$server = "localhost";
$username = "root";
$password ="";

$con = mysqli_connect($server, $username, $password);

if(!$con){
die("connection to this databse is failed due to".mysqli_connect_error());
}

echo "Server is connected to the database";








?>
