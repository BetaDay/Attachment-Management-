<?php
include("../../../includes/dbconnect.php");
include("../sessions.php");
$conn = DBconnect();
if (isset($_POST['logbook'])) {

$date = $_POST['date'];
$week=$_POST['week'];
$email = $_SESSION['email'];
$day1 = $_POST['day1'];
$day2 = $_POST['day2'];
$day3 = $_POST['day3'];
$day4 = $_POST['day4'];
$day5 = $_POST['day5'];
$day6 = $_POST['day6'];
$day7 = $_POST['day7'];
$comment=$_POST['Scomment'];
$sql = "INSERT INTO elogbook(Week,email,Day1,Day2,Day3,Day4,Day5,Day6,Day7,StudentComments,CompanySupervisorComments,UniversityBasedSupervisorComments,Marks,date)VALUES('$week','$email','$day1','$day2','$day3','$day4','$day5','$day6','$day7','$comment','','','','$date')";
$query = mysqli_query($conn,$sql);
if ($query) {
	echo "<script>alert('Successful Logbook Updated');
	  window.location.href='logbook.php?week=".$week."'; </script>";
}else{
	echo "<script>alert('Unable to Update Logbook');
	  window.location.href='logbook.php'; </script>";
}
}

?>