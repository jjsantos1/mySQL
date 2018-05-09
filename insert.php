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
$query=("INSERT INTO pet(name, owner, species, sex, birth, death) VALUES ('$name','$owner','$species','$sex','$birth','$death')");

mysqli_query($link,$query);
?>