<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
 header('location:login.php');
};

if(isset($_GET['logout'])){
 unset($user_id);
 session_destroy();
 header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Student Dashboard</title>
  <style>

  }
  h3{
    text-align: center;
    font-weight: bold;
    color: greenyellow;

  }
  .para{
    font-family: serif;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    color: navajowhite;
  }

  .profile img{
   height: 200px;
   width: 180px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
 }

  .container{
   
   background-color: lightyellow;
   width: 100%;
   align-items: center;
   justify-content: center;
   padding:20px;
   border-radius: 25px;
}

.container .data{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 100%;
   border-radius: 5px;
}

.container .data h3{
   margin:5px 0;
   font-weight: bold;
   font-size: 18px;
   color:var(--black);

}

.container .data p{
    width: 100%;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 16px;
   color:var(--black);
   margin:10px 0;
   background-color: lightblue;
  
}


</style>
</head>
<body>

  <!-- Navigation Bar-->

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
  <!--Content-->

  <div class="w3-row">

    <div class="w3-col w3-container m4 l3">
      <br>
      <div class="w3-half w3-blue-grey w3-container" style="height:auto; width:100% ; border-radius: 25px;">
        <div class="w3-padding-24 w3-center">
          <br>
          <br>
          <div class="profile" style="text-align: left;">
            <center><?php
            $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select) > 0){
              $fetch = mysqli_fetch_assoc($select);
            }
            if($fetch['image'] == ''){
              echo '<img src="images/default-avatar.png">';
            }else{
              echo '<img src="uploaded_img/'.$fetch['image'].'">';
            }
          ?></center>
        </div>

        <div class="w3-left-align w3-padding-large">


          <center><h3><?php echo $fetch['name']; ?></h3> </center>
          <br>
          <p class="para">Roll No.: <?php echo $fetch['roll']; ?></p> 
          
          <p class="para" style="font-size:16px">Email Id: <?php echo $fetch['email']; ?></p> 


        </div>
      </div>
    </div>
  </div>

  <div class="w3-col w3-container m3 l9 ">  
    <h3 style=" font-family: 'Arial' , serif; color:#2b0459; background-color:lightsteelblue;"><center><b>STUDENT DASHBOARD</b></center></h3>
    
    <div class="container" >

   <div class="data" style="text-align: left;">
    
      
      <h3>Name : </h3>
      <p><?php echo $fetch['name']; ?></p> 
      
      <h3>Father's Name : </h3>
      <p><?php echo $fetch['father']; ?></p> 

      <h3>Date of Birth : </h3>
      <p><?php echo $fetch['dob']; ?></p> 

      <h3>Gender : </h3>
      <p><?php echo $fetch['gender']; ?></p> 

      <h3>Roll No. : </h3>
      <p><?php echo $fetch['roll']; ?></p> 

      <h3>Branch : </h3>
      <p><?php echo $fetch['branch']; ?></p> 

      <h3>Mobile No. : </h3>
      <p><?php echo $fetch['mobile']; ?></p> 

      <h3>Email : </h3>
      <p ><?php echo $fetch['email']; ?></p> 
      
      <br>

          <div>
            <button class="w3-button w3-blue w3-border w3-left w3-border-none w3-round-large"><a style="text-decoration: none;" class="pro" href="update_profile.php" class="btn">Update Profile </a></button>

            <button class="w3-button w3-blue w3-border w3-right w3-border-none w3-round-large"><a style="text-decoration: none;" class=""href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">Logout</a></button>
  
          </div>
   </div>

 

</div>
  </div>

</div>
</div>
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
