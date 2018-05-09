<?php
include_once("connect.php");
require("homepage.html");

$name = $_POST['name'];
$owner = $_POST['owner'];
$species = $_POST['species'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$death = $_POST['death'];

//Insert record
$query=("UPDATE pet SET owner='$owner' WHERE name='$name'");
$query=("UPDATE pet SET species='$species' WHERE name='$name'");
$query=("UPDATE pet SET sex='$sex' WHERE name='$name'");
$query=("UPDATE pet SET birth='$birth' WHERE name='$name'");
$query=("UPDATE pet SET death='$death' WHERE name='$name'");

print "Information has been updated successfully.<br>";
mysqli_query($link,$query);
?>