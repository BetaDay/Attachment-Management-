<?php

include("../../../includes/dbconnect.php");

$conn = DBconnect();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
     
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../index.php" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Logout</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
 
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
            <a href="../index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
      
              </p>
            </a>
  
          </li>
          <li class="nav-item">
            <a href="register_students.php" class="nav-link active">
               <i class="nav-icon fas fa-users"></i>
              <p>
                 Register Students
       
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="industrial_supervisor.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                  Industrial Supervisor(s)
       
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="institution_supervisor.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                  Institution Supervisor(s)
       
              </p>
            </a>
          </li>
           <!--  <li class="nav-item">
            <a href="assign_supervisors.php" class="nav-link">
         <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Assign Supervisor
       
              </p>
            </a>
          </li> -->
               <li class="nav-item">
            <a href="students.php" class="nav-link ">
         <i class="nav-icon fas fa-search"></i>
              <p>
                Students
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="assessments.php" class="nav-link">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                Assessments
       
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Register Student</h3>
                     <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
         
            <div class="card-body">
            <form action="../../actions/signup_students.php" method="post" onsubmit="return validate()">

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
              <label class="floating-label" for="Email">Registration Number</label><br>
              <input type="text" class="form-control" name="adm"  placeholder="" required>
            </div>
              <div class="form-group mb-3">
              <label class="floating-label" for="Email">Course of Study</label><br>
              <input type="text" class="form-control" name="course"  placeholder="" required>
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
              
              <select class="form-control" name="supervisor_name">
                <option selected disabled>--SELECT SUPERVISOR--</option>
         
              <?php
$sql = "SELECT * FROM supervisors";
$query = mysqli_query($conn,$sql);
while ($fetch = mysqli_fetch_array($query)) {
  $supervisor_fname = $fetch['supervisor_fname'];
  $supervisor_lname = $fetch['supervisor_lname'];
  $supervisor_email = $fetch['email'];
  echo"<option>".$supervisor_email."</option>";
}
              ?>
               <?php $date=date("20y-m-d");
            ?>
                   </select>
            </div>
                <div class="form-group mb-3">
              <label class="floating-label" for="Email">Date Commenced:</label><br>
            <input type="date" class="form-control" name="duration_from" min="<?php echo $date; ?>" placeholder="" required>
            
            </div>
            
                  <div class="form-group mb-3">
              <label class="floating-label" for="Email">Expected Finish Date:</label><br>
            <input type="date" class="form-control" name="duration_to" min="<?php echo $date; ?>" placeholder="" required>
            
            </div>
            <div class="form-group mb-4">
              <label class="floating-label" for="Password">Town</label><br>
      <input type="text" class="form-control"  name="town" 
              placeholder="" required>
            </div>
                <div class="form-group mb-3">
              <label class="floating-label" for="Email">Street</label><br>
              <input type="text" class="form-control" name="street"  placeholder="" required>
            </div>
    <div class="form-group mb-3">
              <label class="floating-label" for="Email">Building</label><br>
              <input type="text" class="form-control" name="building"  placeholder="" required>
            </div>

          <div class="form-group mb-2">
            <button class="btn btn-block btn-primary mb-4" name="signup">Sign Up</button>
       </div>
            </form>
          </div>
            </div>
            <!-- /.card -->
            </div>
         </div>
         
 <?php
if(isset($_POST['mark_logbook'])){
  $mail = $_POST['email'];
  $marks = $_POST['marks'];
  $comment = $_POST['comment'];
  $feedback = $_POST['feedback'];
  $sql = "UPDATE students_logbook SET marks='$marks',marked='1',feedback='$feedback',comment='$comment',supervisor_email='$supervisor_email' WHERE id='$log_id' ";
  $query = mysqli_query($conn,$sql);
  if ($query) {
  echo "<script>alert('Successful Logbook Marked');
    window.location.href='logbooks.php'; </script>";
  }else{
     echo "<script>alert('Error occured');
    window.location.href='logbooks.php'; </script>"; 
  }
}

 ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard.js"></script>
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & ../plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
