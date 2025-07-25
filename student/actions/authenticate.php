<?php

include("../../includes/dbconnect.php");
include("../../includes/secure.php");
//call connection file
 $conn = DBconnect();
 //get user inputs and secure using test_security() method
if (isset($_POST['signin'])) {
	# code...
$email =  test_security($_POST['email']);
$email =  mysqli_real_escape_string($conn,$email);
$password =  test_security($_POST['password']);
$password =  mysqli_real_escape_string($conn,$password);

//validate inputs
 // $password =  $_POST['password'];
function getOneStudentDetails($email,$password){
	 $conn = DBconnect();
$sql = "SELECT * FROM students WHERE email='$email' AND adm='$password'";
$query = mysqli_query($conn,$sql);
$get = mysqli_fetch_array($query);
if($get){

$id    =   $get['id'];
$fname = $get['fname'];
$lname = $get['lname'];
$email = $get['email'];
$adm = $get['adm'];
$course = $get['course'];
$year = $get['year'];
$company_name = $get['company_name'];
$company_address = $get['company_address'];
$department = $get['department'];
$supervisor_name = $get['supervisor_name'];
$duration_from = $get['duration_from'];
$duration_to = $get['duration_to'];
$password = $get['password'];

//images
$json_string = array(" Authenicated"=>'Success',
	"Id"=>$id,
	"Admission Number"=>$adm,
	"Firstname"=>$fname,
	"Lastname"=>$lname,
	"course"=>$course,
	"year"=>$year
	
);
session_start();
$_SESSION["email"] = $email;
header("location: ../dashboard");
header("Content-type: application/json");
echo json_encode($json_string);
}else{
	$json_string = array(" Authentication Failed"=>'Using that Admission Password');
}	

}
getOneStudentDetails($email,$password);

}








