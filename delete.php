<?php
$username = $_GET['username'];
$password = $_GET['password'];

//Connection to MySQL server
$link = mysqli_connect("localhost",$username,$password,"menagerie1");
if ($link){
	echo 'You are connected to MySQL.';
}
else{
	echo "Couldn't connect to MySQL.";
}

//Connection to the database

//Insert record
$query=("DELETE FROM pet WHERE name=\"Chocho\"");

mysqli_query($link,$query);
?>