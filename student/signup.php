<?php
session_start();
 
// Destroying session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Student-Login</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">

	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/user.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper bg-light">
	<div class="auth-content" style="width: 600px; ">
		<div class="card" >
			<div class="row align-items-center text-center">
				<div class="col-md-12" >
					<div class="card-body">
						<form action="actions/signup_students.php" method="post">
						<img src="assets/images/user.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Create Account</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Student FirstName</label><br>
							<input type="text" class="form-control" name="fname"  placeholder="" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Student LastName</label><br>
							<input type="text" class="form-control" name="lname"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email Address</label><br>
							<input type="email" class="form-control" name="email"  placeholder="" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Student Adm Number</label><br>
							<input type="text" class="form-control" name="adm"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Course of Study</label><br>
							<input type="text" class="form-control" name="course"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Year of Study</label><br>
							<input type="text" class="form-control" name="year"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Company Name Attached</label><br>
							<input type="text" class="form-control" name="company_name"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Company Address</label><br>
							<input type="text" class="form-control" name="company_address"  placeholder="" required>
						</div>
								<div class="form-group mb-3">
							<label class="floating-label" for="Email">Department</label><br>
							<input type="text" class="form-control" name="department"  placeholder="" required>
						</div>
								<div class="form-group mb-3">
							<label class="floating-label" for="Email">Supervisor Name</label><br>
							<input type="email" class="form-control" name="supervisor_name"  placeholder="" required>
						</div>
								<div class="form-group mb-3">
							<label class="floating-label" for="Email">Duration From:</label><br>
						<input type="date" class="form-control" name="duration_from"  placeholder="" required>
						
						</div>
									<div class="form-group mb-3">
							<label class="floating-label" for="Email">Duration To:</label><br>
						<input type="date" class="form-control" name="duration_to"  placeholder="" required>
						
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label><br>
			<input type="password" class="form-control"  name="password" 
							placeholder="" required>
						</div>
					
						<button class="btn btn-block btn-primary mb-4" name="signup">Sign Up</button>
					<p><a href="index.php">Login</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
