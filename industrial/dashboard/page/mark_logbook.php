 <?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
if(isset($_POST['mark'])){
$student_email = $_POST['email'];
$attendance = $_POST['attendance'];
$punctuality = $_POST['punctuality'];
$skills = $_POST['skills'];
$office_applications = $_POST['office_applications'];
$technical_applications = $_POST['technical_applications'];
$specialisation = $_POST['specialisation'];
$scientific_knowledge = $_POST['scientific_knowledge'];
$ability_to_learn = $_POST['ability_to_learn'];
$acceptability_to_colleagues = $_POST['acceptability_to_colleagues'];
$creativity = $_POST['creativity'];
$planning = $_POST['planning'];
$time_marks = $_POST['time_marks'];
$date = $_POST['date'];
$feedback = $_POST['feedback'];
$comment = $_POST['comment'];

// $sql = "INSERT INTO assess_students(
// 'student_email',
// 'attendance',
// 'punctuality',
// 'skills',
// 'office_applications',
// 'technical_applications',
// 'specialisation',
// 'scientific_knowledge',
// 'ability_to_learn',
// 'acceptability_to_colleagues',
// 'creativity',
// 'planning',
// 'time',
// 'date',
// 'feedback',
// 'comment')VALUES(
// '$student_email',
// '$attendance',
// '$punctuality',
// '$skills',
// '$office_applications',
// '$technical_applications',
// '$specialisation',
// '$scientific_knowledge',
// '$ability_to_learn',
// '$acceptability_to_colleagues',
// '$creativity',
// '$planning',
// '$time',
// '$date',
// '$feedback',
// '$comment')";
$sql = "INSERT INTO assess_students(
student_email,
attendance,
punctuality,
skills,
office_applications,
technical_applications,
specialisation,
scientific_knowledge,
ability_to_learn,
acceptability_to_colleagues,
creativity,
planning,
time_marks,
date,
feedback,
comment
)
VALUES(
'$student_email',
'$attendance',
'$punctuality',
'$skills',
'$office_applications',
'$technical_applications',
'$specialisation',
'$scientific_knowledge',
'$ability_to_learn',
'$acceptability_to_colleagues',
'$creativity',
'$planning',
'$time_marks',
'$date',
'$feedback',
'$comment'
)";
$querie = mysqli_query($conn,$sql);
  if ($querie) {
  echo "<script>alert('Successful Logbook Marked');
    window.location.href='marked_logbooks.php'; </script>";
  }else{
    //  echo "<script>alert('Error');
    // window.location.href='assess.php'; </script>"; 
    echo mysqli_error($conn);
  }
}

 ?>