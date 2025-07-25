<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
if (isset($_POST['signup'])) {
$supervisor_fname = $_POST['supervisor_fname'];
$supervisor_lname = $_POST['supervisor_lname'];
$email = $_POST['email'];
$course = $_POST['course'];
$instituition_name = $_POST['instituition_name'];
$instituition_address = $_POST['instituition_address'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$sql = "SELECT * FROM supervisors WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_fetch_array($query);
	if ($fetch['email']==$email) {
	echo "<script>alert('Supervisor Already Registered using this email');
	  window.location.href='../dashboard/page/institution_supervisor.php'; </script>";
	  exit();
}
else{
	$sq = "INSERT INTO supervisors(supervisor_fname,supervisor_lname,email,course,instituition_name,instituition_address,department,phone)VALUES('$supervisor_fname','$supervisor_lname','$email','$course','$instituition_name','$instituition_address','$department','$phone')";
	$que = mysqli_query($conn,$sq);
	if ($que) {
		session_start();
		  $mail = $_SESSION["email"];
			echo "<script>alert('Successful Supervisor Registered');
	  window.location.href='../dashboard/page/institution_supervisor.php'; </script>";
	}else{
echo mysqli_error($conn);
	}
}

}else{
	echo mysqli_error($conn);
}

}


?>