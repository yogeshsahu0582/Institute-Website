<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $roll = mysqli_real_escape_string($conn, $_POST['roll']);
   $branch = mysqli_real_escape_string($conn, $_POST['branch']);
   $father = mysqli_real_escape_string($conn, $_POST['father']);
   $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `userform`(name, dob, gender, roll, branch, father, mobile, email, password, image) VALUES('$name', '$dob', '$gender', '$roll', '$branch', '$father', '$mobile', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            
         }else{
            $message[] = 'registeration failed!';
         }
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

   <title>Student Registration</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<style>
    *{
      margin: 0;
      padding: 0;
    }

    body{
      background: url(image/g4.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: absolute;
     
    }
    div.main{
      width: 50%;
      margin: 100px auto 0px auto;
    }
    h2{
      text-align: center;
      padding: 10px;
      font-family: sans-serif;
    }
    div.register{
      background-color: rgba(0, 0, 0, 0.5);
      width: 100%;
      font-size: 16px;
      border-radius: 10px;
      border: 1px solid rgba(255,255,255,0.3);
      box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
      color: #fff;
    }

    form#register{
      margin: 40px;
    }
    label{ 
      font-family: sans-serif;
      font-size: 20px;
      font-style: italic;
    }

    select {
      width: 100%;
      padding: 7px;
      display: inline-block;
      border: 1px solid #ddd;
      border-radius: 3px;
      outline: 0;
      background-color: #fff;
      box-sizing: border-box;
      box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .box{
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      outline: 0;
      padding: 7px;
      background-color: #fff;
      box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
    }
    

    input#submit{
      width: 200px;
      padding: 7px;
      font-size: 16px;
      font-family: sans-serif;
      font-weight: 600;
      border: none;
      border-radius: 3px;
      background-color: #a9b02c;
      position: center;
      color: #fff;
      cursor: pointer;
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
      margin-bottom: 20px;
    }

    label,span,h2{
      text-shadow:  1px 1px 5px rgba(0, 0, 0, 0.3);
    }


  </style>
</head>
<body>
<!-- Header Part -->

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
   
   <!--Register Page-->


   <div class="main">

      <div class="register">
        <h2 style="color:yellowgreen;">Govt Polytechnic College Betul</h2>
        <h2 style="color:aqua;"> Student Registration</h2>

      <form id="register" action="" method="post" enctype="multipart/form-data">
        
         <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         ?>

         <label>Name : </label>
         <br>
         <input type="text" name="name" placeholder="Enter Your Full Name" class="box" required>
         <br><br>

         <label>Date of Birth : </label>
         <br>
         <input type="date" name="dob" class="box" placeholder="Enter Date of Birth" required> 
         <br><br>

         <label>Gender : </label>
         <br>
         <select class="box" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
         </select>
         <br><br>

         <label>Branch : </label>
         <br>
         <select class="box" name="branch" required >
            <option value="cse">Computer Science & Engg.</option>
            <option value="ee">Electrical Engg.</option>
            <option value="me">Mechenical Engg.</option>
            <option value="ete">Electronics and TeleCommunication Engg.</option>
         </select>
         <br><br>

         <label>Enroll./Roll No.: </label>
         <br>
         <input type="text" name="roll" class="box" placeholder="Enter Your Enroll./Roll No." required>
         <br><br>

         <label>Father's Name : </label>
         <br>
         <input type="text" name="father" class="box" placeholder="Enter Your Father's Name"required>
         <br><br>

         <label>Mobile No.: </label>
         <br>
         <input type="number" name="mobile" class="box" placeholder="Enter Your Mobile No." required >
         <br><br>

         <label>E-mail Id: </label>
         <br>
         <input type="email" name="email" placeholder="enter email" class="box" required>
         <br><br>

         <label>Password: </label>
         <br>
         <input type="password" name="password" placeholder="enter password" class="box" required>
         <br><br>

         <label>Confirm Password: </label>
         <br>
         <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
         <br><br>

         <label>Upload Profile Image: </label>
         <br>
         <input type="file" name="image"  accept="image/jpg, image/jpeg, image/png">
         <br>
         <br>
         <input type="submit" name="submit" value="register now" class="btn">
         <br>
         <center><a href="#" style="color:violet ;font-size: 20px;">Forget Registration</a></center>
         <br>
         <center><a href="#" style="color:red; font-size: 20px;">Forget Password</a></center>
         <br>
      <center><p style="color: greenyellow;font-size: 20px;">already have an account? <a href="login.php" style="color:skyblue;">login now</a></p></center>
         
      </form>

   </div>
</div>
<br>
<!-- Footer-->
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