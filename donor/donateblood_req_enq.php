<?php
 require_once('../dbconnection.php');
 require('donordetail.php');
 $sql = "SELECT * from donarregistration as donordetail INNER JOIN donaterequest as donatereq ON donordetail.id = donatereq.id ";

 // if(isset($_POST['accept'])){
 //   $mysql = mysqli_query($con,"UPDATE donateblood SET status='accepted'");
 //   if($mysql){
 //     echo "<script>alert('Accepted');</script>";
 //   }else{
 //       echo "Failed ".mysqli_error($con);
 //   }
 // }
 //
 // if(isset($_POST['denied'])){
 //   $mysql = mysqli_query($con,"UPDATE donateblood SET status='denied'");
 //   if($mysql){
 //     echo "<script>alert('Denied');</script>";
 //   }else{
 //       echo "Failed ".mysqli_error($con);
 //   }
 // }


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


 <?php require("donor_header.php"); ?>

<div class="container" style="margin-bottom: 100px;">
  <div class="HEADING" style="text-align:center; font-size:50px; font-family:san-sarif; background-color:orange; border-radius: 15px; border:1px solid white; margin-top:100px;">
   DONATE BLOOD REQUESTS ENQUIRE
  </div>
  <table class="table table-hover " style="margin-top: 30px;">
    <tr style="background: #fff;">

          <th>Date Of Request</th>
           <th>Blood Type</th>
            <th>Message</th>
             <th>Blood Amount</th>
              <th>Status</th>
    </tr>

<?php
      $query = mysqli_query($con, "SELECT * FROM donateblood");
      while ($a = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$a['date_of_request']."</td>";
        echo "<td>".$a['blood_type']."</td>";
        echo "<td>".$a['message']."</td>";
        echo "<td>".$a['blood_amount']."</td>";
        echo "<td>".$a['status']."</td>";
        echo " </tr>";
        }
    ?>

  </table></div><br><br><br>

  <!--footer starts here--->
  <footer>
    <div class="footer">
      <br>
      <p style="font-weight:bolder; font-weight: bolder; color:white;">Akhileshkumar Patil And Akshay C</p>
        <p style="font-weight: bolder;">&copy2022 all right reserved</p>

  </div>
  </footer>
  <!--footer starts here--->

   </body>
  </html>
