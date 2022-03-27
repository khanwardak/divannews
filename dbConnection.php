<?php 

$servername="localhost";
$username="root";
$pass ="";
$dbname ="divan-db";

$con=mysqli_connect($servername, $username,$pass,$dbname);

if($con->connect_error){
	echo "No Connection";
}
else {
	
}


 ?>