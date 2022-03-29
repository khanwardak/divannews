
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
</head>


<?php 
include('dbConnection.php');
  include('header.php');
 ?>


 



<body>

<div class="container mt-8 " id="main" style=" ">

  <hr>
 <!--  rigth slider -->
  <div class="row main-tow">
 <!--   videos and  ads are -->
    <div class="col-sm-12 col-md-12  col-lg-3 bg-war">
      
      <div class="w3-card-2" style="background-color: black;">
        <video width="100%" controls>
          <?php $sql="select * from videos order by id desc limit 1";
            $result = $con ->query($sql);
            if ($result->num_rows>0) {
              while($row = $result->fetch_assoc()){
                echo '<source src="video/'.$row["source"].'">';
              }
            }
           ?>
  
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.

</video>
<p style="color: white ; padding-bottom: 20px; margin-right: 10px;" >د کورینو جارو وریز وایی </p>
      </div>
      <img src="img/download.jpg" width="100%" height="168px">
    </div>

 <!--  videos and ads end here -->

<!-- 5 last news area -->
     <div class="col-sm-12 col-md-12  col-lg-3 d-flex justify-content-end " id="last_news" style=" border: solid cadetblue;
  border-radius: px;
  padding: 15px 10px 10px;
  border-right: none;
  border-left: none;
  background: none;
  border-bottom: none;
   " >
  <div class="header" style=" position:absolute;
  margin-top:-25px;
  margin-left:10px;
  color:white;
  background:black;
  border-radius:10px;
  padding:2px 10px;">تازه خبرونه</div>
   <ul style="text-align: right;list-style-type: none; " class="list-group">
  <?php 

    $sql ="select * from news where fresh ='true' order by id desc limit 4";
    $result = $con->query($sql);
    if($result->num_rows>0){
      while ($row = $result->fetch_assoc()) {
        echo '

        <li id= "last_list" style=" ">
         <a  class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank">  <img id="las_img" src="img/'.$row["image"].'" style=" width:95px; height:74px;"></a>
          <div style="display: inline; direction: rtl; "><a class="text-decoration-none text-dark "  href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>



          </div>

       
      

     ';
      }
    }else{
      echo"no data";
    }



   ?>
    </ul>

     

     </div>
     <!-- last 5 new area end here -->
    
    <div class="col-sm-12 col-md-12 col-lg-6" >
      
<div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->

  <div class="carousel-inner">
     <?php 

    $sql="select * from news where position = '1' and page ='first' order by id desc limit 1";
    $result =$con->query($sql);
    if ($result->num_rows>0) {
      while($row = $result->fetch_assoc()){
      echo ' <div class="carousel-item active">
     <ahref="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img src="img/'.$row["image"].'" alt="Los Angeles" class="d-block" style="width:100%; height: 400px;"></a> 
      <div class="carousel-caption">
      <ahref="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"><h3>'.$row["title"].'</h3></a>  
       <ahref="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"><p>'.$row["led"].'</p></a> 
      </div>
    </div>';
    }
  }
     $sql="select * from news where position = '2' and page ='first' order by id desc limit 1";
    $result =$con->query($sql);
    if ($result->num_rows>0) {
      while($row = $result->fetch_assoc()){
      echo ' <div class="carousel-item ">
     <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"><img src="img/'.$row["image"].'" alt="Los Angeles" class="d-block" style="width:100%; height: 400px;"></a> 
      <div class="carousel-caption">
      <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"> <h3>'.$row["title"].'</h3></a> 
       <ahref="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"><p>'.$row["led"].'</p></a> 
      </div>
    </div>';
    }
  }
     $sql="select * from news where position = '3' and page ='first' order by id desc limit 1";
    $result =$con->query($sql);
    if ($result->num_rows>0) {
      while($row = $result->fetch_assoc()){
      echo ' <div class="carousel-item ">
    <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank" class="text-white link- text-decoration-none"><img src="img/'.$row["image"].'" alt="Los Angeles" class="d-block" style="width:100%; height: 400px;"></a>  
      <div class="carousel-caption">
      <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"><h3>'.$row["title"].'</h3></a>  
      <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"  class="text-white link- text-decoration-none"> <p>'.$row["led"].'</p></a> 
      </div>
    </div>';
    }
  }

   ?>
   
    
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


    </div>

  <!--   catagory start -->
    <div class="container" style="margin-top: 15px;">

      <div class="row">
        <div class="col bg-succes">   <div class="col-sm-12   col-lg-12 d-flex justify-content-end " id="last_news" style=" border: solid cadetblue;
  border-radius: px;
  padding: 15px 10px 10px;
  border-right: none;
  border-left: none;
  border-bottom: none;
   " ></div>
  <div class="header" style=" position:absolute;
  margin-top:-40px;
  margin-left:10px;
  color:white;
  background:black;
  border-radius:10px;
  padding:2px 10px;"><a  href="#" target="_blank"  class="text-white link- text-decoration-none">سیاسی</a></div>



   <div class="row siasi ">
     <div class="col-lg-4 c col-sm-12 col-md-12 "><div class="col-lg-12 c col-sm-12 col-md-12" >

  <div class="box col-lg-12  col-sm-12 col-md-12">
    <?php 

      $sql="select * from news where importantON ='مهم' and cat ='سیاسی' order by id desc limit 1";
      $result = $con->query($sql);
      if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          echo'<a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img src="img/'.$row["image"].'" width="100%" height="260px"></a>
        <div class="text">
           <a href="#" target="_blank"  class="text-white link- text-decoration-none"><p>'.$row["title"].'</p></a> 
        </div>';
        }
      }

     ?>
     
    </div>

      </div></div>
     <div class="col-lg-4 card col-sm-12 col-md-12 siasi-one ">
       <div class="row" class="siasi-to">
          <ul style="text-align: right;list-style-type: none; " class="list-group">
            <?php 

              $sql="select * from news where cat = 'سیاسی' order by id desc limit 2";
              $result = $con->query($sql);
              while($row = $result->fetch_assoc()){
                echo ' <li id= "last_list" style=" ">
        <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img id="las_img" src="img/'.$row["image"].'" style=" width:160px; height:120px;"></a>   
          <div style="display: inline; direction: rtl; "><a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>


          </div>

        
        </li>';
              }

             ?>

       
       

      </ul>
         
         
       </div>


         
         
       </div>
        <div class="col-lg-4 card col-sm-12 col-md-12 ">
       <div class="row">
          <ul style="text-align: right;list-style-type: none; " class="list-group" class="">
            <?php 

              $sql="select * from news where position ='2' order by id desc limit 2";
              $result= $con->query($sql);
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo ' <li id= "last_list" style=" ">
         <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"> <img id="las_img" src="img/'.$row["image"].'" style=" width:160px; height:120px;"></a> 
          <div style="display: inline; direction: rtl; ">
          <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>



          </div>
        </li>
';
                }
              }

             ?>

       
        

      </ul>
         
         
       </div>


         
         
       </div>
      <!--  sport catagory start here -->
               <div class="col bg-succes" style="margin-top: 25px;">   

          <div class="row">
            
                <div class="col bg-succes">
                  <div class="col-sm-12   col-lg-12 d-flex justify-content-end " id="last_news" style=" border: solid cadetblue;
                             border-radius: px;
                             padding: 15px 10px 10px;
                             border-right: none;
                             border-left: none;
                             border-bottom: none;
                                              " >
     
                 </div>
                            <div class="header" style=" position:absolute;
                              margin-top:-40px;
                                                        margin-left:10px;
                              color:white;
                              background:black;
                              border-radius:10px;
                              padding:2px 10px;">اقتصادی</div>
                  <div class="box w3-card-2  col-sm-12 col-md-12">
                    <?php

                      $sql="select * from news where importantON ='مهم' and cat ='اقتصادی' order by id desc limit 1 ";
                      $result = $con->query($sql);
                      if ($result->num_rows>0) {
                        while($row = $result->fetch_assoc()){
                          echo'<a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img src="img/'.$row["image"].'" width="100%" height="260px"></a>
                       <div class="text">
                        <a href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p>'.$row["title"].'</p></a> 
                       </div>';
                        }
                      }
                      ?>
                     
                 </div>
      <ul style="text-align: right;list-style-type: none;  margin-top: 10px;  padding-bottom:5px; padding-right: 0px; " class="list-group w3-card">

        <?php 
          $sql=" select *  from news where position='2' and cat ='اقتصادی'  order by id desc limit 4 ";
          $result = $con->query($sql);
          if ($result -> num_rows>0) {
              while($row = $result->fetch_assoc()){
                echo ' <li id= "last_list" style=" ">
        <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank">   <img id="las_img" src="img/'.$row["image"].'" style=" width:95px; height:74px;"></a>
          <div style="display: inline; direction: rtl; ">
          <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>

          </div>
        </li>';
              }
          }

         ?>

       

      

      </ul>

                </div>
  <div class=" col-lg-4 col-sm-12 col-md-12">

    <div   class="col-sm-12   col-lg-12 d-flex justify-content-end " id="last_news" style=" border: solid cadetblue;
                      border-radius: px;
                      padding: 15px 10px 10px;
                      border-right: none;
                      border-left: none;
                      border-bottom: none; " >          
   </div>

      <div class="header" style=" position:absolute;
          margin-top:-40px;
          margin-left:10px;
          color:white;
          background:black;
          border-radius:10px;
          padding:2px 10px;">سپورتی
       </div>
            <div class="box col-sm-12 col-md-12">

              <?php

                  $sql="select *  from news where importantON ='مهم'  and cat ='سپورتی' order by id desc limit 1";
                  $result = $con->query($sql);
                  if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                      echo '
                      <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img src="img/'.$row["image"].'" width="100%" height="260px"></a>
                   <div class="text">
                     <a class="text-decoration-none text-white" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p>'.$row["title"].'</p></a> 
                  </div>';
                    }
                  }
                ?>

                 

          </div>  
        <ol style="text-align: right;list-style-type: none;  margin-top: 10px;  padding-bottom:5px;padding-right: 0px; " class="list-group w3-card">

            <?php 

              $sql="select * from news where position ='2' and cat ='سپورتی' order by id desc limit 4";
              $result = $con->query($sql);
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                  echo'  <li id= "last_list" style=" ">
         <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"> <img id="las_img" src="img/'.$row["image"].'" style=" width:95px; height:74px; margin-left: 20px;"></a> 
            <div style="display: inline; direction: rtl; ">
            <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>
            </div>
        </li>';
                }
              }
             ?>

      

  
      </ol> 
</div>

 <div class="col-lg-4 col-sm-12 col-md-12   bg-succe  ">

     <div class="col-sm-12   col-lg-12 d-flex justify-content-end " id="last_news" style=" border: solid cadetblue;
           border-radius: px;
           padding: 15px 10px 10px;
           border-right: none;
           border-left: none;
           border-bottom: none;
            " >
     
     </div>
  <div class="header" style=" position:absolute;
  margin-top:-40px;
  margin-left:10px;
  color:white;
  background:black;
  border-radius:10px;
  padding:2px 10px;">اجتماعی</div>
                    
     <div class="box col-sm-12 col-md-12 ">
      <?php  
        $sql="select * from news where importantON ='مهم'  and cat ='اجتماعی' order by id desc limit 1";
        $result = $con->query($sql);
        if ($result->num_rows>0) {
            while($row= $result->fetch_assoc()){
              echo '
              <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img src="img/'.$row["image"].'" width="100%" height="260px"></a>
           <div class="text">
           <a class="text-decoration-none text-white" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p>'.$row["title"].'</p></a> 
           </div>';
            }
        }

      ?>
         
     </div>

    <ul style="text-align: right;list-style-type: none; margin-top: 10px; padding-bottom:5px ; padding-right: 0px; " class="list-group w3-card">
          <?php 
            $sql ="select * from news where position='2' and cat ='اجتماعی' order by id desc limit 4";
            $result = $con->query($sql);
            if ($result->num_rows>0) {
                while($row = $result->fetch_assoc()){
                  echo ' 
        <li id= "last_list" style=" ">
          <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><img id="las_img" src="img/'.$row["image"].'" style=" width:95px; height:74px;"></a> 
          <div style="display: inline; direction: rtl; ">
          <a class="text-decoration-none text-dark" href="news.php?id='.$row["id"].'&cat='.$row["cat"].'" target="_blank"><p id="last_p" style=" ">'.$row["title"].'</p></a>
          </div>
        </li>';
                }
            }

           ?>
       

    </ul>

</div>
<footer>
  <div class="container" style="background-color:black; margin-top:120px ; height:200px">
      <div class="row">
        <div class="col bg-succes"><img src="img/mobile.JPG" style="width: 90px; height: 90px; border-radius: 5%; margin-top: 10px"; >
          <ul class=" list-group" style="list-style-type: none; color: white;">
            <li>ارتباط با ما</li>
            <ul class=" list-group" style="list-style-type: none;">
              <li>Phone: 0789652044</li>
              <li>Email: info@divannews.com</li>
            </ul>
          </ul>
 
        </div>
        <div class="col-lg-4 col-sm-12 col-md-12 class d-flex justify-content-center ">             <p style="color:white; margin-top: 45%;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> recieved <i class="fa " aria-hidden="true"></i>  
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        <div class="col-lg-4 d-flex justify-content-center">
          <div style="color:  white;width: 50px; height: 25px; border: solid white 1px; margin-top: 10px; border-top: none; border-bottom: none;">
          Home</div>

        </div>

      </div>
</div></footer>


          </div>

     </div>
     
    </div>
    
    

</div>
  
      </div>



   <!--  siasi cat end herw and economice star her -->

    <!-- ----------------------------------------------------rigth slider end========================= -->
  </div>
</div>
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
     