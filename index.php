<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Taviraj&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">


	<title>GPC Betul</title>

	<style>

		.w3-lobster {
			font-family: "Lobster", Sans-serif;
		}
		a:link { text-decoration: none; }
		a:visited { text-decoration: none; }
		a:hover { text-decoration: none; }
		a:active { text-decoration: none; }


		.mySlides {display: none;}
		img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {

	position: relative;
	margin: auto;
}

/* Caption text */
.text {
	color: #f2f2f2;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	bottom: 8px;
	width: 100%;
	text-align: center;
}


/* The dots/bullets/indicators */


.active {
	background-color: #717171;
}




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

			<a href="#life" class="w3-bar-item w3-button w3-mobile">Life@GPC-Betul</a>

			<div class="w3-dropdown-hover w3-mobile">
				<button class="w3-button">Student Corner <i class="fa fa-caret-down"></i></button>
				<div class="w3-dropdown-content w3-bar-block w3-dark-grey">
					<a href="login.php" class="w3-bar-item w3-button w3-mobile">Login</a>
					<a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Slide Share-->

	<div class="slideshow-container">

		<div class="mySlides fade">

			<img src="image/7.jpg" style="width:100%; height:550px;">

		</div>

		<div class="mySlides fade">

			<img src="image/hal3.jpg" style="width:100%; height:550px;">

		</div>

		<div class="mySlides fade">

			<img src="image/2.jpg" style="width:100%; height:550px;">

		</div>

		<div class="mySlides fade">

			<img src="image/8.jpg" style="width:100%; height:550px;">

		</div>

	</div>
	<br>

	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>

	<script>
		let slideIndex = 0;
		showSlides();

		function showSlides() {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			let dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<!--About US -->

<h2 style="font-family:Garamond"><center><b><u>About Us </u></b></enter></h2>


	<div class="w3-row">
		<div class="w3-col w3-container m4 l3" >
			<div class="w3-half w3-blue-grey w3-container" style="height:auto; width:100%; border-radius:25px;">
				<div class="w3-padding-64 w3-center">
					<h1 style="font-weight: bold; color: silver;">Principal Desk</h1>
					<img src="image/principal.jpg" class="w3-margin w3-circle" alt="Person" style="width:80%">
					<div class="w3-left-align w3-padding-large">

						<h5 style="font-family:sans-serif;"><b><center>Dr. A.S. BHADORIYA</center></b></h5>
						<p style="font-family:sans-serif;text-align: center; line-height: 2.0;">(Principal)</p>

						<p style="font-family:sans-serif; text-align: center;">Govt. Polytechic College, Betul</p>
						<br>
						<br>
						<center> <a href="principal.php" class="btn btn-primary" style="color: yellow; font-size: 18px">See Profile</a></center>

					</div>
				</div>
			</div>
		</div>

		<div class="w3-col w3-container m8 l9" style="background-color: palegoldenrod; border-radius:25px">  
			<center><h3 style="font-weight: bold; font-family: cursive; text-decoration: underline;" > Govt. Polytechnic College</h3></center>
			<br>
			<div class="myimg"><img src="image/gpc.jpg" width=100%; height=350px; style="border-radius: 25px;"></div>
			<br>
			<p style="text-align: justify; font-family : sans-serif; font-size: 17px;">Government Polytechnic College, Betul is located in the state of Madhya Pradesh. Government Polytechnic College, Betul was developed in 1998. It is one of the leading college in Engineering. Government Polytechnic College, Betul is situated in Betul, Madhya Pradesh. Government Polytechnic College, Betul is a Government accredited institution. It is governed by AICTE. 4 courses in various specialities are taught in this institution. It provides UG Diploma course only.
				<br>
				<br>
				Under the Engineering, there are a total of 4 courses. The Under Graduate Diploma category has 4 courses which are Dip. (Mechanical Engg.), Dip. (Electronics and Telecommunication Engg.), Dip. (Electrical Engg.) and Dip. (Computer Science and Engg.).
			</p>
			<br>
		</div>
	</div>

</div>
</div>
</div>


<!-- Courses-->

<div id="life">
	<h2 style="font-family:Garamond;"><center><b><u>Courses</u></b></enter></h2>
	</div>

	<div class="grid-container" style="background-color:lightgreen; border-radius: 20px;">

		<div class="container">
			<a href="cse.php"><img src="image/cs.jpg" alt="Computer Science & Engg." class="image"></a>
			
		</div>

		<div class="container">
			<a href="ee.php"><img src="image/ee.png" alt="Electrical Engg." class="image"></a>
		</div>

		<div class="container">
			<a href="me.php"><img src="image/mee.jpg" alt="Mechanical Engg." class="image"></a>
		</div>

		<div class="container">
			<a href="ete.php"><img src="image/et.jpg" alt="Electronics & Telecommunication Engg." class="image"></a>
		</div>


	</div>


	<br>

<!-- Life@GPC-Betul-->

<div id="life">
	<h2 style="font-family:Garamond;"><center><b><u>Life@GPC-Betul</u></b></enter></h2>
	</div>

	<div class="grid-container" style="background-color:yellow; border-radius: 20px;">

		<div class="container">
			<img src="image/Library.jpg" alt="Library" class="image">
			<div class="overlay">
				<div class="text"><a href="library.php">GPC Library</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/classroom1.jpg" alt="Classroom" class="image">
			<div class="overlay">
				<div class="text"><a href="classroom.php">GPC Classrooms</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/Lab.jpg" alt="Smart-Lab" class="image">
			<div class="overlay">
				<div class="text"><a href="lab.php">Digital Smart Lab</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/sport.jpg" alt="Sports" class="image">
			<div class="overlay">
				<div class="text"><a href="sports.php">GPC Sports & Events</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/hostel.jpg" alt="Hostel" class="image">
			<div class="overlay">
				<div class="text"><a href="hostel.php">GPC Boys Hostel</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/Greenree.jpg" alt="Greenree" class="image">
			<div class="overlay">
				<div class="text"><a href="greenree.php">GPC Greenree</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/trips.jpg" alt="GPC-Trip" class="image">
			<div class="overlay">
				<div class="text"><a href="trip.php">GPC Trips</a></div>
			</div>
		</div>

		<div class="container">
			<img src="image/aol.jpg" alt="Art Of Living" class="image">
			<div class="overlay">
				<div class="text"><a href="art_of_living.php">Art of Living</a></div>
			</div>
		</div>
	</div>


	<br>

	<!--College Map-->
	<h2 style="font-family:Garamond;"><center><b><u>Map@GPC-Betul</u></b></enter></h2>
	</div>

	<iframe style="margin: 20px; border-width: 5px; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7402.494910298273!2d77.8670969339348!3d21.925036425277654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6091bbb2fdb07%3A0xe8bdf4a79e01665e!2sAlumni%20Association%20of%20Government%20Polytechnic%20College%20Betul!5e0!3m2!1sen!2sin!4v1651047661672!5m2!1sen!2sin" width="95%" height="450px" style="border:2px; padding: 10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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