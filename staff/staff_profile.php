<?php
 require_once('../dbconnection.php');

 require("staff_details.php");

  if(!isset($_SESSION['email'])){
    header("location: ../stafflogin.php");
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

   <!-- header file included here -->
   <?php require("staff_header.php"); ?>
   <br><br><br>
<div class="profile" style="border:2px solid brown;height: 400px;width: 637px;margin-left: 347px; ">
  <div class="col-sm-9 col-sm-offset-3" style="border: 2px solide brown; width: 491px -47px;margin-left: 0px;margin-top: -21px; position:static; margin-bottom:100px;">
    <table style="margin-top:35px;"><h2 style="text-align: center;font-size: 45px;font-family: san-sarif;background-color: orange;width: 635px;margin-left: -16px; margin-top: 20px;">PROFILE</h2>
    <!-- <td><img src="<?php echo $staff->pimg; ?>"  class="img" alt="Donor Image" style="border:2px solid brown;"></td> -->
   <td style="vartical-align:top; padding-top: 0px; padding-left: 75px">
     <table style="margin-left: -353; margin-top:0px;">
       <tr>
         <td>Hospital_id:</td>
       </tr>
       <tr>
         <td>NAME: </td>
       </tr>
       <tr>
         <td>AGE: </td>
       </tr>
       <tr>
         <td>DATE OF BIRTH:</td>
       </tr>
       <tr>
         <td>GENDER:</td>
       </tr>
       <tr>
         <td>BLOOD TYPE: </td>
       </tr>
       <tr>
         <td>ADDRESS : </td>
       </tr>
       <tr>
         <td>PHONE: </td>
       </tr>
       <tr>
         <td>EMAIL: </td>
       </tr>
     </table>
   </td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   <td>
     <table style="margin-top: 0px;">
       <td>
         <tr>
           <td><?php echo $staff->h_id; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->name; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->age; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->dob; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->gender; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->bloodgroup; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->address; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->phone; ?></td>
         </tr>
         <tr>
           <td><?php echo $staff->email; ?></td>
         </tr>
       </td>
     </td>
     </table>
   </td>
 </table><br>
<a href="staff_updatepro.php" class="btn" style="margin-left:249px; font-family: san-sarif; border-color: brown; font-weight: bolder; background-color:orange; color:black;">Update Details</a>
</div>



</div>

 <br><br><br><br>



   <!--footer starts here--->
   <footer>
     <div class="footer">
         &copy2022 all right reserved
     </div>
   </footer>
   <!--footer starts here--->


     </body>
   </html>
