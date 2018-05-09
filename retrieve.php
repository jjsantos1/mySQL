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
$query=("SELECT * FROM pet");

$result=mysqli_query($link,$query);
$num_rows=mysqli_num_rows($result);
echo '<br>';
print $num_rows." records.<br>";

print "<table border=\"1\">\n";
while ($a_row = mysqli_fetch_row($result)){
	print "<tr>\n";
	foreach($a_row as $field){
		print "\t<td>".$field."</td>\n";
	}
	print "</tr>\n";
}
print "</table>\n";
?>