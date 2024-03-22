<?php
$Name = $_POST['Name'];
$FatherName = $_POST['FatherName'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$Branch = $_POST['Branch'];
$Rollno = $_POST['Rollno'];
$Mobile = $_POST['Mobile'];
$Email = $_POST['Email'];
$psw = $_POST['psw'];

if(!empty($Name) || !empty($FatherName) || !empty($DOB) || !empty($Gender) || !empty($Branch) || !empty($Rollno) || !empty($Mobile) || !empty($Email) || !empty($psw)) {

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "gpc_betul";

  	// Create connection
	$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	} else{
		$SELECT ="SELECT Rollno From register Where Rollno = ? Limit 1";
		$INSERT = "INSERT Into register (Name, FatherName, DOB, Gender, Branch, Rollno, Mobile, Email, psw ) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($SELECT);
		$stmt-> bind_param("s",$Rollno);
		$stmt-> execute();
		$stmt-> bind_result($email);
		$stmt-> store_result();
		$rnum = $stmt->num_rows;
		if ($rnum==0) {
			$stmt->close();
			$stmt->bind_param("ssisssiss", $Name, $FatherName, $DOB, $Gender, $Branch, $Rollno, $Mobile, $Email, $psw);
			 echo"registration Successfully...."

		} else{
			 echo"Roll No. already register"
		}
		$stmt->close();
		$conn->close();

	}

}
else {
	echo "All field are required" ;
	die();
}
?>
