

<?php

$host = "localhost";
$user = "id14045816_darsha";
$password = "9@qz[K<#5xHZE%\U";
$db = "id14045816_register";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
	die("Error in connection " . mysqli_connect_error());
}
else{
	echo "<br><h3>Connection Success ....</h3>"; 
}


?>