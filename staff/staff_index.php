<?php
 require_once('../dbconnection.php');
 require("staff_details.php");

if(isset($_POST['submit'])){
  echo "<pre>";
  print_r($_POST);
  die();
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
<?php require("staff_header.php"); ?>

<div class="container" style="min-height: 100%; width: 1288px;">
  <div class="row">
      <img src="../images/111.png" style="height: 150px; width: 630px; position: static; padding-bottom:29px; padding-top: 40px; margin: 13px 266px;"><br>
  </div>
  <div class="col-sm-9 pull-left" style="position:static;">
    <p>Blood is a non-replenishable entity, the only source of which are humans. Timely availability of quality blood is a crucial requirement for sustaining the healthcare services. Therefore, maintaining quality of blood and identification of Professional Donors is a major responsibility of blood banks. NACO (National AIDS Control Organization) and NABH (National Accreditation Board for hospitals and Healthcare Providers) have provided guidelines for ensuring the quality of blood and identifying Professional Donors. Moreover, manually monitoring standards and identifying professional donors is a challenging job. In this work, we develop a standard compliant Blood Bank Management System with a novel based enforcing mechanism. The developed system is an end-to-end solution for not only managing but implementing enforcing strategies and providing decision support to the users. The proposed Blood Bank Management System has been implemented across 28 blood banks and a major hospital. It has been found extremely effective in streamlining the workflow of blood banks.</p>
</div><br>

</div><hr>
<!-- <div id="container1" style="height: 265px;">
  <div id="row">
   <div class="col-sm-3 pull-right" style="position:static; height:345px; background:white; padding:-1px; margin-top: 16px; border: 1px solid orange; border-radius:9px; overflow:hidden;">
  <H3 style="font-family:san-serif;  text-align: center; background:orange; margin-top: 0px;">UPDATES</H3><BR>
    <div class="ticker">
      <div class="marquee">
        <marquee style="height:300px; margin-top:-18px;" scrollamount="2" scrolldelay="2" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
        <ul id=update>
          <li>this is my fierst newesfggggggggggggggggggggggggggggggg</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
          <li>this is my fierst newes</li>
        </ul></marquee></div></div>

</d <div class="news">
    NEWS
    </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  </div>
</div><hr>


<div class="container1">
  <div id="row">
    <div class="camps">
        CAMPS
    </div>
  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  <div class="col-sm-3">
  asgfjkgefsjgf
  fsdgfhjgfsdgf
  btrajesh lkumar bkumarprasad
  ejashf sjkdgfjsdgf
  \sefhsjdh fsdjkf
  sdjf sdjkfjsdf

  </div>

  </div>
</div><hr> -->

<!-- <div id"container2">
  <div id="row">
    <div id="map">

    </div>
  </div>
</div> -->







 <!--footer starts here--->
 <footer>
   <div class="footer">
     
        &copy2022 all right reserved
   </div>
 </footer>
 <!--footer starts here--->


   </body>
 </html>
