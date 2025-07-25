<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
if (isset($_POST['signup'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$adm = $_POST['adm'];
$course = $_POST['course'];
$year = $_POST['year'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$department = $_POST['department'];
$supervisor_name = $_POST['supervisor_name'];
$duration_from = $_POST['duration_from'];
$duration_to = $_POST['duration_to'];
$password = $_POST['password'];
$sql = "SELECT * FROM students WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_fetch_array($query);
	if ($fetch['email']==$email) {
	echo "<script>alert('Student Already Registered using this email');
	  window.location.href='../signup.php'; </script>";
	  exit();
}
else{
	$sq = "INSERT INTO students(fname,lname,email,adm,course,year,company_name,company_address,department,supervisor_name,duration_from,duration_to,password)VALUES('$fname','$lname','$email','$adm','$course','$year','$company_name','$company_address','$department','$supervisor_name','$duration_from','$duration_to','$password')";
	$que = mysqli_query($conn,$sq);
	if ($que) {
		session_start();
		  $mail = $_SESSION["email"];
			echo "<script>alert('Successful Student Registered');
	  window.location.href='../dashboard'; </script>";
	}else{
echo mysqli_error($conn);
	}
}

}else{
	echo mysqli_error($conn);
}

}


?>