<?php
 require_once('dbconnection.php');
 session_start();
 $msg = "";
if(isset($_POST['submit'])){
  // echo "<pre>";
  // print_r($_POST);
  // die();
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $query = mysqli_query($con, "SELECT * FROM staffinfo WHERE email='$email' AND password='$password' ");
  $a = mysqli_num_rows($query);
  if($a > 0 ){
    echo "<script>alert('Entered Query');</script>";
        $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
        header("Location: staff/staff_index.php");
  }else {
    $msg =  "E-mail id or Password Didn't Matched";
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- <meta http-equiv="refresh" content="2"> -->
       <title>login</title>
       <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
       <link rel="stylesheet" href="owlcarousel/owl.carousel.min.js">
       <link rel="shortcut icon" type="images/png" href="images/drop.png">
       <meta name="viewport" content="width-device-width initial-scale=1">
       <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
       <link rel="stylesheet" href="css/styleabc.css">
       <script src="bootstrap/jquery.min.js"></script>

       <script src="bootstrap/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>



   <body>
     

     <!-- header image slider here -->
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
           <li data-target="#myCarousel" data-slide-to="3"</li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
           <li data-target="#myCarousel" data-slide-to="5"></li>
           <li data-target="#myCarousel" data-slide-to="6"></li>
           <li data-target="#myCarousel" data-slide-to="7"></li>
           <li data-target="#myCarousel" data-slide-to="8"></li>
           <li data-target="#myCarousel" data-slide-to="9"></li>
           <li data-target="#myCarousel" data-slide-to="10"></li>
           <li data-target="#myCarousel" data-slide-to="11"></li>
           <li data-target="#myCarousel" data-slide-to="12"></li>
           <li data-target="#myCarousel" data-slide-to="13"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
           <div class="item active">
             <img src="images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/Blood-Donor-Testing.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/benefits-of-blood-donation.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/1.jpg" style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/blood-screening-tests.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/donate-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/Fullscreen-capture-2812014-30133-AM.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/m6840119_763x260-give-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/DGZDGSDFG.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/1222719906.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/BANNER1.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/BANNER3.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="images\blood-donation.jpg" style="width:100%; height:321px;">
           </div>
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>



 <?php require("header1.php"); ?>
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">

   <table width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px; border: 2px solid brown; box-shadow:4px 1px 20px black;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
     <tr><td colspan="2" align="center"><div style="width: 596px;height: 70px;margin-top: -23px;font-size: 50px;font-family: san-sarif;background: orange;font-weight: bold;border: 2px solid brown;">STAFF LOGIN</div></td></tr>

               <tr><td colspan="2" align="center" > <span class="text-danger" style="display:block; padding-top: 20px;"> <?php echo $msg; ?></span> </td></tr>

     <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td align="right"><img src="Images/user.png" padding="2px -1px 19px" margin-left="-24px" margin-right="45px" width="200px" height="200px" style="padding-right: 10px;margin-left: -62px;margin-top: -65px;"></td>
                    <td style="vertical-align:top"><table  height="200px">


<tr><td class="lefttd" style="padding-right: 44px;">E-Mail:</td><td><input type="email" name="email" required="required"/></td></tr>
<tr><td class="lefttd">Password:</td><td><input type="password" name="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"/></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="submit" style="border:0px; background:brown; width:100px; height:30px; border-radius:5px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>

</table>
</td></tr></table>



</form>
</div>


<!--footer starts here--->
<footer>
  <div class="footer">
    <br>
    <p style="font-weight:bolder; font-weight: bolder; color:white;">Akhileshkumar Patil And Akshay C</p>
      <p style="font-weight: bolder;">&copy2022 all right reserved</p>
    <p><a href="adminlogin.php"><button type="button" class="btn btn-primary" name="button" style="float:right; margin-top:-55px;">ADMIN</button><a/></p>

</div>
</footer>
<!--footer starts here--->


  </body>
</html>
