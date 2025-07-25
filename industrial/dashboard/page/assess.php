<?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$supervisor_email=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supervisor</title>

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
            <a href="profile.php" class="nav-link ">
               <i class="nav-icon fas fa-user"></i>
              <p>
                 Profile
       
              </p>
            </a>
          </li>
    <li class="nav-item">
            <a href="logbooks.php" class="nav-link ">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                 Logbooks
       
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assess.php" class="nav-link active">
         <i class="nav-icon fas fa-table"></i>
              <p>
                 Assess Students
       
              </p>
            </a>
          </li>
     <li class="nav-item">
            <a href="requests.php" class="nav-link">
         <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Leave Requests
       
              </p>
            </a>
          </li>
                <li class="nav-item">
            <a href="marked_logbooks.php" class="nav-link">
         <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Assessments
       
              </p>
            </a>
          </li>
                 <li class="nav-item">
            <a href="students.php" class="nav-link">
         <i class="nav-icon fas fa-users"></i>
              <p>
                Assigned Students
       
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
            <h1>Logbooks</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Logbooks</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
// $conn = DBconnect();
// $log_id = $_GET['log_id'];
// if ($log_id == "") {
//   echo "<script>alert('Select The student first on the E-logbook tab');
//   window.location.href= 'logbooks.php'</script>";
//   exit();
// }
// $sql = "SELECT * FROM students_logbook WHERE id='$log_id'";
// $query = mysqli_query($conn,$sql);
// $fetch = mysqli_fetch_array($query);
// $mail = $fetch['email'];
// $date = $fetch['date'];
?>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mark E-logbooks</h3>
                     <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
         
              <form  action="mark_logbook.php" method="post">
                <div class="card-body">
     
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Email</label>
                 <input type="text" name="email" class="form-control" >
                  </div>
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Attendance(marks) </label>
              
                  <select name="attendance" class="form-control">
                    <option>0</option>
                     <option>1</option>
                      <option>2</option>
                    
                  </select>
                  </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Punctuality(marks) </label>
              
                  <select name="punctuality" class="form-control">
                    <option>0</option>
                     <option>1</option>
                      <option>2</option>
                    
                  </select>
                  </div>
           <div class="card card-primary"><div class="card-header">
                <h3 class="card-title">Attitude of work </h3>
         </div>
       </div>
            
         

        <div class="form-group">
        <label for="exampleInputEmail1">Computer Skills (marks)</label>
       <select name="skills" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">General Office Applications(marks) </label>
       <select name="office_applications" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Technical applications (marks)</label>
       <select name="technical_applications" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Area Of Specialisation (marks)</label>
       <select name="specialisation" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Scientific & Technical Knowledge (marks)</label>
       <select name="scientific_knowledge" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Ability to learn & perform Tasks (marks)</label>
       <select name="ability_to_learn" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>
        

        <div class="form-group">
        <label for="exampleInputEmail1">Acceptability to colleagues(marks) </label>
       <select name="acceptability_to_colleagues" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Creativity (marks)</label>
       <select name="creativity" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Organisation & Planning(marks) </label>
       <select name="planning" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Effective use of students time(marks) </label>
       <select name="time_marks" class="form-control">
        <option>0</option>
        <option>1</option>
        <option>2</option>       
        </select>
        </div>
        <div class="form-group">
                    <label for="exampleInputEmail1">Date </label>
          <input type="date" name="date" class="form-control">
                  </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Feedback </label>
            <textarea class="form-control" rows="3" name="feedback"></textarea>
                  </div>
           <div class="form-group">
                    <label for="exampleInputEmail1">Comment </label>
            <textarea class="form-control" rows="3" name="comment"></textarea>
                  </div>
              
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="mark"><i class="fas fa-check"></i>Mark Logbook</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         </div>

      </div><!-- /.container-fluid -->
    </section>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
