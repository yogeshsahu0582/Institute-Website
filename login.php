<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
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
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      
      body{
      margin: 0;
      padding: 0;
      background: url(image/8.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      font-family: sans-serif;
      background-position: absolute;
    }

    .loginbox{
      margin: 100px auto 0px auto;
      width: 450px;
      height: 550px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      top: 50%;
      left: 50%;
      
      transform: translate(0%,0%);
      box-sizing: border-box;
      padding: 70px 30px;

    }

    .loginimg{
      width: 100px;
      height:100px;
      border-radius: 50%;
      position: absolute;
      top: -50px;
      left: calc(50% - 50px);
    }

  form h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
  }

  label{ 
      font-family: sans-serif;
      font-size: 16px;
      font-style: italic;
      font-weight: bold;
    }

     input{
      width: 100%;
      border: 1px solid #ddd;
      background:#fff;
      outline: none;
      height: 40px;
      color: #000;
      font-size: 16px;
    }

    .loginbox input[type="submit"]
    {
      border: none;
      outline: none;
      height: 40px;
      background: deepskyblue;
      color: #fff;
      font-size: 18px;
      border-radius: 20px;
    }
    .loginbox input[type="submit"]:hover
    {
      cursor: pointer;
      background: #ffc107;
      color: #000;
    }
    .loginbox a{
      text-decoration: none;
      font-size: 16px;
      line-height: 30px;
      color: lightblue;

    }
    .loginbox a:hover
    {
      color: blue;
    }
   </style>

</head>
<body>
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
   <!--Login Page-->

   <div class="loginbox">
      <img src="images/login.jpg" class="loginimg">
   <form action="" method="post" enctype="multipart/form-data">
     
      <h1>Student Login</h1>  
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <br>
       <label>User Name : </label>
       <br>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <br><br><br>

          <label>Password :</label>
          <br>

      <input type="password" name="password" placeholder="enter password" class="box" required>
      <br><br><br>

      <input type="submit" name="submit" value="login now" class="btn">
      
      <center><a href="#">Forget Password</a></center>
      <center><p>don't have an account? <a href="register.php">register now</a></p></center>
   </form>

</div>
<br>
<br>
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