<?php
include_once("connect.php");
require("homepage.html");

$name = $_POST['name'];

//Insert record
$query=("DELETE FROM pet WHERE name='$name'");

print "$name has been successfully deleted.";
mysqli_query($link,$query);
?>