<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `userform` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `userform` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `userform` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <!--header part-->
  <div class="header" style="background-image: url('image/header3.png'); background-repeat: no-repeat; background-size: 100% 180px; height: 180px;">
    <h1 style=" font-family: 'Taviraj' , serif; color:#2b0459"><center><b>GOVT. POLYTECHNIC COLLEGE BETUL</b></center></h1>     
    <p><center>One of the top College of Madhya Pradesh.</center></p>
    <p><center>Affilated By: Rajiv Gandhi Proudyogiki Vishwavidyalaya</center></p>
  </div>
  
  <!-- Navigation Bar-->

  <div class="w3-bar w3-brown" style="padding : 2px;">
    <a href="index.php" class="w3-bar-item w3-button w3-mobile"><img src="image/logo.jpg" style="width: 30px;"> GPC BETUL</a>
    
    <div class="right-nav">
      <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About</a>
      
      
      <div class="w3-dropdown-hover w3-mobile">
        <button class="w3-button">Academics <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
          <a href="https://www.rgpvdiploma.in/PDF/acadmic_jan-june2022.pdf" class="w3-bar-item w3-button w3-mobile">Academic Calender</a>
          <a class="w3-bar-item w3-button w3-mobile" href="admission.php">Admission Procedure</a>
          <a href="https://www.rgpvdiploma.in/Academics/OutcomeBased.aspx" class="w3-bar-item w3-button w3-mobile">Syllabus</a>
          <a class="w3-bar-item w3-button w3-mobile" href="https://www.rgpvdiploma.in/Advertisement_Forms/frm_download_file_New.aspx?Filepath=Advertisement/tt_11may2022110522115028.pdf">Time Table</a>
          <a class="w3-bar-item w3-button w3-mobile"  href="https://www.rgpvdiploma.in/Exam/DiplomaIIIYrResult.aspx">Result</a>
        </div>
      </div>

      <div class="w3-dropdown-hover w3-mobile">
        <button class="w3-button">Department <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
          <a href="cse.php" class="w3-bar-item w3-button w3-mobile">Computer Science & Engg.</a>
          <a href="ee.php" class="w3-bar-item w3-button w3-mobile">Electrical Engg.</a>
          <a href="me.php" class="w3-bar-item w3-button w3-mobile">Mechanical Engg.</a>
          <a href="ete.php" class="w3-bar-item w3-button w3-mobile">Electronics & Telecommunication Engg.</a>
          <a href="general.php" class="w3-bar-item w3-button w3-mobile">General Department</a>
          <a href="scholar.php" class="w3-bar-item w3-button w3-mobile">Scholarship Department</a>
        </div>
      </div>


      <div class="w3-dropdown-hover w3-mobile">
        <button class="w3-button">Student Corner <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
          <a href="login.php" class="w3-bar-item w3-button w3-mobile">Login</a>
          <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
        </div>
      </div>
    </div>
  </div>

  <br>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">go back</a>
   </form>

</div>

<!-- Footer-->
<footer>

  <div class="col-container">
    <div class="col" style="line-height: 0.5;">
      <h4>Govt. Polytechnic College, Betul</h4>
      <p>
        Address : Government Polytechnic College, Sonaghati <br>
        National Highway 69,<br>
        Betul, Madhya Pradesh 460001

      </p>
      <p> <i class="fa fa-phone" style="font-size:14px"></i>: 0000000000</p>
      <p><i class="fa fa-envelope" style="font-size:14px"></i>: </p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-instagram"></a>

    </div>

    <div class="col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="admission.php">Admission Procedure</a></li>
               <li><a href="login.php">Student Corner</a></li>
               <li><a href="https://www.rgpvdiploma.in/Advertisement_Forms/frm_download_file_New.aspx?Filepath=Advertisement/tt_11may2022110522115028.pdf">Time Table</a></li>

        <li><a href="https://www.rgpvdiploma.in/Exam/DiplomaIIIYrResult.aspx">Results</a></li>


      </ul>


    </div>

    <div class="col">
      <h4>Important Links</h4>
      <ul>
        <li><a href="https://www.rgpvdiploma.in/">RGPV Diploma</a></li>
        <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">SBI Collect</a></li>
        <li><a href="http://scholarshipportal.mp.nic.in/Index.aspx">MP Scholarship 2.0</a></li>
        <li><a href="https://www.tribal.mp.gov.in/mptaas">MPTAASC</a></li>
        <li><a href="https://dte.mponline.gov.in/portal/services/onlinecounselling/counshomepage/home.aspx">DTE-Mponline</a></li>
        <li><a href="http://mprojgar.gov.in/">MP-Rojgar</a></li>
        <li><a href="http://www.rojgaraurnirman.in/abhilekh.html">Rojgar & Nirman E-Patrika</a></li>

      </ul>
    </div>
  </div>

</footer>

</body>
</html>