<?php include('session.php'); include('dbConnection.php');


if (isset($_POST['newsInteshar'])) {
	$targetDir = "img/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
          echo "okay";
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    
}

// Display status message

	$page='';
	$fresh='';
	$importanton ='';
		$title = $_POST['title'];
		$titer = $_POST['titer'];
		$led = $_POST['led'];
		$matan = $_POST['editor'];
		if (isset($_POST['page'])) {
			$page = $_POST['page'];
		}
		$position = $_POST['position'];
		$cat = $_POST['cat'];
		if (isset($_POST['fresh'])) {
			$fresh = $_POST['fresh'];
		}
		if (isset($_POST['important'])) {
			$importanton = $_POST['important'];
		}

		$sql="INSERT INTO `news` (`id`, `title`, `titer`, `led`, `matan`, `page`, `position`, `time`, `side`, `cat`, `fresh`,`importantON`,`image`) VALUES (NULL, '$title', '$titer', '$led', '$matan', '$page', '$position', 'time', 'dari', '$cat', '$fresh','$importanton','$fileName');";
		if($con->query($sql)===TRUE){
			echo '<script>alert("خبر نشر شد")</script>';

		}else{
			echo  "opps somethis wrongs";
		}



}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DivanStudio</title>
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
<link rel="stylesheet" type="text/css" href="studio.css">
<script src="ckeditor/ckeditor.js"></script>
<script src="js/jquery/jquery-2.2.4.min.js"></script>
</head>


<body>

	<div class="container all">
		
		<div class="container mt-3">

  
  
  <ul class="nav justify-content-center topnav">
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
    

</div>

<!-- ============================================right side conten start here================================= -->
<div class="container mt-2">
	<form method="post"  enctype="multipart/form-data" class="input-group d-flex justify-content-end" style="width: 100%;">
						<div class="row container">
							<div class="col-8" style="direction:rtl;">
								<label>متن خبر</label>  <textarea  id="editor"  name="editor" style="width: 100%">
 
  </textarea>
							</div>
							<div class="col-4 bg-succes " style="direction: rtl;">
							<label>کتگوری</label>	<select class="form-select " name="cat">
									<option>سیاسی</option>
										<option>اقتصادی</option>
										<option>اجتماعی</option>
										<option> سپورتی</option>
								</select>
								<label>عنوان</label><input class="input-group" type="text" name="title">
								<label>تتر</label><input class="input-group" type="text" name="titer">
							<label>لید</label>	<input class="input-group" type="text" name="led">
							<label>نقاط مهم</label>	<input class="input-group" type="text" name="matan">
								<label><i class="fa fa-puzzle-piece" style="color:red; padding: 5px;"></i>چینش</label>
								<hr>
      <input type="checkbox" class="form-check-input" id="check1" name="page" value="first" checked>
      <label class="form-check-label" for="check1">صفحه اول</label>
      	<label></label>	<select class="form-select " name="position">
									<option>1</option>
										<option>2</option>
										<option>3</option>
								</select>
								 <input type="checkbox" class="form-check-input" id="check2" name="fresh" value="true" checked>
      <label class="form-check-label" for="check1">خبر تاره</label>
       <input type="checkbox" class="form-check-input" id="check1" name="important" value="مهم" checked>
      <label class="form-check-label" for="check1">خبر مهم در کتگوری</label>
             <input type="file"  name="image" >
      <label class="form-check-label" for="check1">تصویر</label>
      <br>

    <button class="btn btn-success" name="newsInteshar" style="margin-top: 10px;"> انتشار </button>
							</div>
						</div>
</form>
</div>





<!-- ============================================right side conten end here================================= -->

	</div>

<script type="text/javascript">
  CKEDITOR.replace("editor");

</script>


</body>
</html>