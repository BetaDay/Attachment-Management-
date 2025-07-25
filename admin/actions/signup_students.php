<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
 $filter="[([a-zA-Z])/([a-zA-Z-/]+/).([a-zA-Z0-9]{2,4})]";
if (isset($_POST['signup'])) {
	$adm = $_POST['adm'];
	echo $adm;
	if(preg_match($filter,$adm))
	{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$course = $_POST['course'];

$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$department = $_POST['department'];
$supervisor_name = $_POST['supervisor_name'];
$duration_from = $_POST['duration_from'];
$duration_to = $_POST['duration_to'];
$town = $_POST['town'];
$street = $_POST['street'];
$building = $_POST['building'];
$sql = "SELECT * FROM students WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_fetch_array($query);
	if ($fetch['email']==$email) {
	echo "<script>alert('Student Already Registered using this email');
	  window.location.href='../dashboard/page/register_students.php'; </script>";
	  exit();
}
else{
	$sq = "INSERT INTO students(fname,lname,email,adm,course,company_name,company_address,department,supervisor_name,duration_from,duration_to,town,street,building)VALUES('$fname','$lname','$email','$adm','$course','$company_name','$company_address','$department','$supervisor_name','$duration_from','$duration_to','$town','$street','$building')";
	$que = mysqli_query($conn,$sq);
	if ($que) {
		session_start();
		  $mail = $_SESSION["email"];
			echo "<script>alert('Successful Student Registered');
	  window.location.href='../dashboard/page/register_students.php'; </script>";
	}else{
echo mysqli_error($conn);
	}
}

}else{
	echo mysqli_error($conn);
}

}
else{
	echo "<script>alert('Check the format of your registration number. e.g INTE/MG/1234/23/34');
	  window.location.href='../dashboard/page/register_students.php'; </script>";
	  exit();
}
}
?>