<?php
   include('dbConnection.php');
   session_start();
   
   if(isset($_POST["submit"])) {
      // username and password sent from form 
      
     echo $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM user WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
     echo $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >=1) {
       
         $_SESSION['login_user'] = $myusername;
         
         header("location: divanstudio.php");
         echo "qu";
      }else {
        echo $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Divannews</title>

	<link rel="stylesheet" type="text/css" href="w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<!-- <?php 

		// if (isset($_POST["submit"])) {
		// 	echo '<br>';
		// 	echo "khan";
		// 	$username =htmlspecialchars( $_POST['username']);
		// 	$pass =htmlspecialchars ($_POST['pass']);
		// 	echo "The pass and username".$username."pass:".$pass;
		// }

	 ?> -->

	<div class="container-fluid " >
			<form method="post">
		<div class="login  d-flex justify-content-center">
			
				<div class="row">
					<div class="col w3-card-2 input-group" style="height:500px"><img id="login" src="img/red.jpg" class="" style="height: 150px; width: 400px; border-radius: 2%; margin-top: 1%;">
						<div style="width:100%; margin-top:10px">
						<label>Username</label><input type="" name="username" class="input-group card">
						<label>Password</label><input type="password" name="pass" class="input-group card">
						  <label class="form-check-label">پشتو</label>    <input type="radio" class="form-check-input">
						   <label class="form-check-label">دری</label>    <input type="radio" class="form-check-input">
      
						<input type="submit" name="submit" class="btn btn-primary mt-2 input-group" value="Login" style="padding-bottom: ;">


					</div>
						

					</div>
					

					
			
			</div>
		</div>
</form>
	</div>

<?php 
	include('hadle.php');
	/**
	 * 
	 */
	
	// $sql="INSERT INTO `user` (`id`, `username`, `pass`, `site`, `loginTime`) VALUES (NULL, 'khan', 'khan', 'dari', '11:40');";
// 	// $inser = new Handler();
// 	// $inser->createRecord($con,$sql);
// if(isset($_POST['submit'])){
// 		echo" s";
// 	}
	

 ?>
</body>
</html>