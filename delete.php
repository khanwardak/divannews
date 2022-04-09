<?php

include('dbConnection.php');

if(isset($_GET['id']))

{

     $sql = "DELETE FROM news WHERE id=".$_GET['id'];

     $con->query($sql);

	 echo 'Deleted successfully.';

}

  ?>