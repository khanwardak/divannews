
<!DOCTYPE html>
<html>
<head>
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
<link rel="stylesheet" type="text/css" href="news.css">
</head>


<?php 
include('dbConnection.php');
  include('header.php');
 ?>


 



<body>

<div  class="container mt-8 mmain">
	
<div class="row news">
	<div class="col-lg-4 col-md-12 col-sm-12 bg-success">
		
	</div>
	<div class="col-lg-8 col-md-12 col-sm-12 bg-primar">
		<div class="col bg-success">
			<img src="img/red.jpg" width="100%">
		</div>
		<div class="col bg-warning">
			<p>the news test apear here</p>

		</div>


	</div>

</div>

</div>

</body>
<style type="text/css">
  
   .box{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
    }
    .box .text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 0;        
        text-align: center;
        top: 79%; /* Adjust this value to move the positioned div up and down */
        background: rgba(0, 0, 0, 0.8);
        font-family: Arial,sans-serif;
        color: #fff;
        width: 100%; /* Set the width of the positioned div */



    }
    @media only screen and (min-width: 1000px) {
  .side{display: none;}
 #main.main-tow.siasi.siasi-to.siasi-one{
    display: none;
  }
}
   @media only screen and (max-width: 1001px) {
  #nav{display: none;}
  .topnav{display: none;}
  .nav{display: none;}
}
@media only screen and (min-width: 440px){
.sider{
  margin-left: 100%;
}

}

</style>
</body>
</html>

<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
     