<?php
 include('../dbconnection.php');
 $msg = "";
 if(isset($_POST["submit"]))
 {

  $h_id=6;
  $name=trim($_POST["name"]);
 	$address=trim($_POST["address"]);
 	$state=trim($_POST["state"]);
  $phone=trim($_POST["phone"]);
  $email=trim($_POST["email"]);
  $gender=trim($_POST["gender"]);
  $age=trim($_POST["age"]);
  $dob=trim($_POST["dob"]);
  $bloodgroup=trim($_POST["bloodgroup"]);
 	$password=trim($_POST["password"]);
 	$c_password=trim($_POST["c_password"]);

//   $target_dir = "../upload/";
// $target_file = $target_dir . basename($_FILES["pimg"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    // $check = getimagesize($_FILES["pimg"]["tmp_name"]);
    // if($check !== false) {
    //     // echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["pimg"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
      if($password != $c_password){
        $msg = "Confirm Password didn't matched with Password ";
      }else{

        // if (move_uploaded_file($_FILES["pimg"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["pimg"]["name"]). " has been uploaded.";

            $rs=mysqli_query($con,"INSERT INTO staffinfo (h_id, name,address,state,phone,email,gender,age,dob,bloodgroup,password) VALUES ('$h_id','$name','$address','$state','$phone','$email','$gender','$age','$dob','$bloodgroup','$password')") or die(mysqli_error($con));
           	if($rs)
           	{
           		echo"<script> alert('successfully saved')</script>";
           	}
           	else
           	{
           		echo"<script> alert('unable to saved')</script>".mysqli_error($con);
           	}

        // } else {
        //     echo "Sorry, there was an error uploading your file.";
        // }


      // }

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

       <?php require("header2.php"); ?>

 <br><br><br><br><br>

    <div class="container">
      <form class="wrap" method="post" enctype="multipart/form-data">
        <div style="height:570px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:white; border:2px solid red; box-shadow:4px 1px 20px black;">

        <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%;">
          <tr><td colspan="2"  align="center" style="font-family:san-sarif; font-size:50px; color:black; background-color:orange; border:2px solid red; text-align:center;">REGISTRATION</td></tr>

          <tr><td colspan="2">&nbsp;</td></tr>

            <!-- <tr><td  style=" padding-left:20px; padding-bottom: 12px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww" style="border: 2px solid currentColor;"/>&nbsp; </td> -->
            <td style="vertical-align:top;padding-top:0px;">
              <p class="text-danger text-center" style="padding: 0px 0px 20px;"><?php echo $msg; ?></p>
                <table cellpadding="0" cellspacing="1px" style="width:100%; height:424px;">
                  <!-- <tr><td class="lefttd">Hospital_ID:</td><td><input type="number" id="h_id" name="h_id" value="" placeholder="Enter Hospital Id" pattern="[0-9]{20, 20}" title="Please Hospital Id" required /></td></tr> -->
                  <tr><td class="lefttd">Name:</td><td><input type="text" id="name" name="name" value="" placeholder="Enter Your Name" pattern="[A-Za-z]{20, 20}" title="Please enter your name" required /></td></tr>
                  <tr><td class="lefttd">Address:</td><td><input type="address" id="address" name="address" placeholder="Enter your address" required /></td></tr>
                  <tr><td class="lefttd">State: </td><td> <select name="state" title="Select your state" required>
                      <option Select hidden>Select State</option>
                      <option value="ASSAM">ASSAM</option>
                      <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                      <option value="KARNATAKA">KARNATAKA</option>
                      <option value="RAJASTHAN">RAJASTHAN</option>
                      <option value="MANIPUR">MANIPUR</option>
                      <option value="NAGALAND">NAGALAND</option>
                      <option value="MIZORAM">MIZORAM</option>
                      <option value="UTTRAKHAND">UTTRAKHAND</option>
                      <option value="GOA">GOA</option>
                      <option value="GUJARAT">GUJARAT</option>
                      <option value="HARYANA">HARYANA</option>
                      </select></td></tr>
                 <tr><td class="lefttd">Phone Number: </td><td> <input type="text" id="phone" name="phone" value="" placeholder="Phone" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." required /></td></tr>
                 <tr><td class="lefttd">Email: </td><td> <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter your email" required /></td></tr>
                 <tr><td class="lefttd">Gender: </td><td> <input name="gender" type="radio" value="male" id="gender"checked="checked" required>Male <input name="gender" type="radio" value="female" id="gender" required>Female</td></tr>
                 <tr><td class="lefttd">Age: </td><td><input type="text" id="age" name="age" value="" placeholder="Current Age" title="Enter your current age" required /></td></tr>
                 <tr><td class="lefttd"> Date Of Birth: </td><td><input type="date" id="dob" name="dob" value="" title="please enter your current date of birth only" required /></td></tr>
                 <tr><td class="lefttd">Blood Group: </td><td> <select name="bloodgroup" title="Select your blood group" required>
                     <option select hidden>Select Blood Group</option>
                     <option value="O+">O+</option>
                     <option value="O-">O-</option>
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                     </select></td></tr>
                 <tr><td class="lefttd">Password: </td><td><input type="password" id="password" name="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td></tr>
                 <tr><td class="lefttd">Confirm Password: </td><td><input type="password" id="password" name="c_password" value="" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td></tr>
                 <!-- <tr><td class="lefttd">Uplode Picture</td><td><input type="file" id="pimg" name="pimg" /></td></tr> -->
                 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                 <tr><td>&nbsp;</td>
                   <td><input type="submit" value="Register" name="submit" style="border:1px; background:orange; width:100px; height:30px; border-radius:5px; color:black; font-weight:bold; font-size:14px; ">
                   <input type="reset" value="Reset" name="reset" style="border:1px; background:orange; width:100px; height:30px; border-radius:5px; color:black; font-weight:bold; font-size:14px; ">
                   </td></td></tr></table>
            </div>
        </table></form></div></div><br><br><br><br><br><br>

        <!--footer starts here--->
        <footer>
          <div class="footer">
            <br>
            <p style="font-weight:bolder; font-weight: bolder; color:white;">Akhileshkumar Patil and Akshay C</p>
              <p style="font-weight: bolder;">&copy2022 all right reserved</p>

        </div>
        </footer>
        <!--footer starts here--->
          </body>
        </html>
