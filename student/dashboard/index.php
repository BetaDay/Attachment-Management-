<?php
// session_start();
include("../../includes/dbconnect.php");
include("sessions.php");
// include("sessions.php");
  $mail = $_SESSION["email"];
$conn = DBconnect();
$sql = "SELECT * FROM students WHERE email='$mail'";
$query = mysqli_query($conn,$sql);
$get = mysqli_fetch_array($query);
$id    =   $get['id'];
$fname = $get['fname'];
$lname = $get['lname'];
$email = $get['email'];
$adm = $get['adm'];
$course = $get['course'];

$company_name = $get['company_name'];
$company_address = $get['company_address'];
$department = $get['department'];
$supervisor_name = $get['supervisor_name'];
$duration_from = $get['duration_from'];
$duration_to = $get['duration_to'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">



  <link rel="stylesheet" href="../../css/jquery-ui.css">
  <link rel="stylesheet" href="../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">



  <link rel="stylesheet" href="../../css/aos.css">
  <link href="../../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

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
        <a href="index.php" class="nav-link">Home</a>
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
    <a href="../../index.php" class="brand-link">
      Dashboard
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
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
      
              </p>
            </a>
  
          </li>
          <li class="nav-item">
            <a href="page/profile.php" class="nav-link">
               <i class="nav-icon fas fa-user"></i>
              <p>
                 Profile
       
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="page/listweeks.php" class="nav-link">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                 logbook
       
              </p>
            </a>
          </li>

    
       <!--    Users Info -->
  <!--         <li class="nav-item">
            <a href="page/reports.php" class="nav-link">
                 <i class="nav-icon fas fa-chart-line"></i>
              <p>
                  Your Logbook
       
              </p>
            </a>
          </li> -->
              <li class="nav-item">
            <a href="page/feedback.php" class="nav-link">
                 <i class="nav-icon fas fa-table"></i>
              <p>
                 View Feedbacks
       
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="page/logbooks.php" class="nav-link">
                 <i class="nav-icon fas fa-table"></i>
              <p>
                 View Log books
       
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4><?php echo $fname  ?></h4>

                <p>Adm: <?php echo $adm; ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="page/profile.php" class="small-box-footer">My profile<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Course: <?php echo $course; ?></h4>

                <p>Department: <?php echo $department; ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
               <a href="page/profile.php" class="small-box-footer">My profile<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>Company Attached: <?php echo $company_name; ?></h4>

                <p>Company Address: <?php echo $company_address; ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="page/profile.php" class="small-box-footer">My profile<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
</div>


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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
 <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/jquery.countdown.min.js"></script>
  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.fancybox.min.js"></script>
  <script src="../../js/jquery.sticky.js"></script>
  <script src="../../js/jquery.mb.YTPlayer.min.js"></script>

  <script src="../../js/main.js"></script>
</body>
</html>
