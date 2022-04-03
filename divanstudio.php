<?php include('session.php'); include('dbConnection.php');

// if (isst($_POST['video'])) {
// 			$videoDir = "video/";
// 			$source = basename($_FILES["video"]["name"]);
// 			$targetVideoPath=$videoDir.$source;
// 			$fileType = pathinfo($targetVideoPath,PATHINFO_EXTENSION);
// 			$videoType = array('mp4','3gp','mkv');
// 			if(in_array($fileType, $videoType))
// 			{
// 				if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetVideoPath)) {
// 					echo "okay";
// 				}
// 			}else{
// 				echo"video uploaded";
// 			}
// 			$vtitle = $_POST["vtitle"];
// 				$sql="INSERT INTO `videos` (`id`, `title`,`source`) VALUES (NULL, '$vtitle','$source');";
// 		if($con->query($sql)===TRUE){
// 			echo '<script>alert("خبر نشر شد")</script>';

// 		}else{
// 			echo  "opps somethis wrongs";
// 		}

// }
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
 <script src="upload.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body>

	<div class="container all">
		
		<div class="container mt-3">

  
  
  <ul class="nav justify-content-center topnav">
    <li class="nav-item">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
    <li class="nav-item">
     
      <a onclick="document.getElementById('video').style.display='block'" class="w3-button">ویدیو</a>
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
	<div class="w3-container">
  
  

  <div id="video" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom ">
      <header class="w3-container w3-red"> 
        <span onclick="document.getElementById('video').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h3>انتشار ویدیو</h3>
      </header>
      <div class="container">
   
       section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      
    </div>
    <form id="upload-form" class="upload-form" method="post">
       <div class="row align-items-center">  
          <div class="form-group col-md-9">
            <label for="inputEmail4">Choose a file:</label>
            <input type="file" class="form-control" id="upl-file" name="upl_file">  
            <span id="chk-error"></span>
          </div>
            <div class="form-group col-md-9">
            <label for="inputEmail4">Choose a file:</label>
            <input type="text" class="form-control" id="title" name="title">  
            <span id="chk-error"></span>
          </div>
          <div class="col">
                <button type="submit" class="btn btn-primary mt-3 float-left" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="row align-items-center">
      <div class="col">
        <div class="progress">
          <div id="file-progress-bar" class="progress-bar"></div>
       </div>
     </div>
    </div>
    <div class="row align-items-center">  
      <div class="col">
        <div id="uploaded_file"></div>
    </div>
  </div>

</div>
</section>


<script type="text/javascript">
  jQuery(document).on('submit', '#upload-form', function(e){
        jQuery("#chk-error").html('');
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();         
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                      var percentage=    percentComplete.toFixed(0);
                        $("#file-progress-bar").width(percentage + '%');
                        $("#file-progress-bar").html(percentage+'%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: 'upload.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            dataType:'json',

            beforeSend: function(){
                $("#file-progress-bar").width('0%');
            },

            success: function(json){
                if(json == 'success'){
                    $('#upload-form')[0].reset();
                    $('#uploaded_file').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                }else if(json == 'failed'){
                    $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });
  
    // Check File type validation
    $("#upl-file").change(function(){
        var allowedTypes = ['video/mp4','image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'application/pdf', 'application/msword', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)) {
            jQuery("#chk-error").html('<small class="text-danger">Please choose a valid file (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
            $("#upl-file").val('');
            return false;
        } else {
          jQuery("#chk-error").html('');
        }
    });
</script>
 
    </div>
</div>
     
    </div>
  </div>
</div>
	<form method="post"  enctype="multipart/form-data" class="input-group d-flex justify-content-end" style="width: 100%;">
						<div class="row container">
							<div class="col-8" style="direction:rtl;">
								<label>متن خبر</label>  <textarea  id="editor"  name="editor" style="width: 100%">
 
  </textarea>
							</div>
							<div class="col-4 bg-succes " style="direction: rtl;">
							<label>کتگوری</label>	<select class="form-select " name="cat">
									<option>    صفحه اول    </option>
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