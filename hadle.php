<?php 

include('dbConnection.php');
/**
 * 
 */
class Handler
{
	
	function createRecord($con, $sql){
		if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  $con->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
		
	
}
// function show($con $sql){
// 	$result = $con->query($sql);
// }
}


 ?>