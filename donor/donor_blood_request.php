<?php
 include('../dbconnection.php');
 require("donordetail.php");

 $msg = "";
 if(isset($_POST["submit"]))
 {
   // echo "<pre>";
   // print_r($_POST); die();
  $request_date=trim($_POST["request_date"]);
  $blood_amount=trim($_POST["blood_amount"]);
  $message=trim($_POST["message"]);
  $donor_id = $donor->id;
  $rs=mysqli_query($con,"INSERT INTO bloodrequest (donor_id,request_date,blood_amount,message) VALUES ('$donor_id','$request_date','$blood_amount','$message') ") or die(mysqli_error($con));
     	if($rs)
     	{
     		echo"<script> alert('successfully saved')</script>";
     	}
     	else
     	{
     		echo"<script> alert('unable to saved')</script";
     	}
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- <meta http-equiv="refresh" content="2"> -->
       <title>AboutUs</title>
       <link rel="stylesheet" href="../owlcarousel/owl.carousel.min.css">
       <link rel="stylesheet" href="../owlcarousel/owl.carousel.min.js">
       <link rel="shortcut icon" type="images/png" href="../images/drop.png">
       <meta name="viewport" content="width-device-width initial-scale=1">
       <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
       <link rel="stylesheet" href="../css/styleabc.css">
       <script src="../bootstrap/jquery.min.js"></script>
       <script src="../bootstrap/bootstrap.min.js"></script>
       <link rel="stylesheet" href="../css/styleabc.css">
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
             <img src="../images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/Blood-Donor-Testing.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/benefits-of-blood-donation.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/1.jpg" style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/blood-screening-tests.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/donate-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/Fullscreen-capture-2812014-30133-AM.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/m6840119_763x260-give-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/DGZDGSDFG.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/1222719906.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/BANNER1.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/BANNER3.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images\blood-donation.jpg" style="width:100%; height:321px;">
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


 <?php require("donor_header.php"); ?><br><br><br>
 <div class="container">
   <form class="wrap" method="post">
     <div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:white; border:2px solid red; box-shadow:4px 1px 20px black;">

     <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%;">
       <tr><td colspan="2"  align="center" style="background-color:orange;"><img src="../Images/request.png" width="300px" height="50px" style="width: 350px;height: 85px;margin-top: 15px;"/></td></tr>
         <tr><td  style=" padding-left:20px; padding-bottom: 12px;" ><img src="../Images/blood3.jpg" width="170px" class="shaddoww" style="margin-top: -40px;margin-left: 20px;height: 301px;border: 2px solid rosybrown;"/>&nbsp; </td>
         <td style="vertical-align:top;padding-top:0px;">
           <?php echo $msg; ?></p> -->
             <table cellpadding="0" cellspacing="1px" style="width:100%; height:424px;">
              <tr><td class="lefttd">Email:</td><td> <?php echo $donor->email; ?></td></tr>
              <tr><td class="lefttd">Request Date:</td><td> <input type="date" id="request_date" name="request_date" title="please select blood request date" required/></td></tr>
              <tr><td class="lefttd">Blood Group:</td><td><?php echo $donor->bloodgroup; ?></td></tr>
              <tr><td class="lefttd">Blood Amount(in ml):</td><td><input type="text" id="blood_amount" name="blood_amount"  title="enter blood amount in ml" required/></td></tr>
              <tr><td class="lefttd">Message</td><td><input type="text" id="message" name="message" value="" placeholder="Your Message Here" title="Type Your Message" required /></td></tr>
              <tr><td>&nbsp;</td>
                <td><input type="submit" value="Request" name="submit" style="border:1px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; color:white; font-weight:bold; font-size:14px; ">
                </td></td></tr></table>
         </div>
     </table></form></div></div><br><br><br><br><br>
 <!--footer starts here--->
 <footer>
   <div class="footer">
       &copy2022 all right reserved
   </div>
 </footer>
 <!--footer starts here--->

  </body>
</html>
