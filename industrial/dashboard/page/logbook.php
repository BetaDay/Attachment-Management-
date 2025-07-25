<?php
include("../sessions.php");
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
            <a href="logbooks.php" class="nav-link active">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                 logbooks
       
              </p>
            </a>
          </li>
       <li class="nav-item">
            <a href="marked_logbooks.php" class="nav-link">
         <i class="nav-icon fas fa-plus-square"></i>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <?php
                $conn=mysqli_connect("localhost","root","","attachment");
                $week=$_GET['week'];
                $user=$_GET['student'];
                $sql="select * from elogbook where Week='$week' and email='$user'";
                $query=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($query);
                if($count<1)
                {
                ?>
                <h3 class="card-title">Week <?php echo $week; ?> Personal logbook For <?php echo $week; ?></h3>
                     <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
         
              <form id="quickForm" action="update_logbook.php" method="post"  enctype="multipart/form-data">
                <div class="card-body">
               <!--    <div class="form-group">
                    <label for="exampleInputEmail1">Week</label>
                    <input type="month" name="week" class="form-control"  placeholder="Eg. 001/nrb" required>
                  </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Day 1</label>
                    <textarea name="day1" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 2</label>
                    <textarea name="day2" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 3</label>
                    <textarea name="day3" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 4</label>
                    <textarea name="day4" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 5</label>
                    <textarea name="day5" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 6</label>
                    <textarea name="day6" class="form-control"  required></textarea>
                    <label for="exampleInputEmail1">Day 7</label>
                    <textarea name="day7" class="form-control"  required></textarea>
                  </div>
             <input type="hidden" name="email" value="<?php echo $mail;  ?>">
             <input type="hidden" name="week" value="<?php echo $_GET['week']; ?>">
           <div class="form-group">
            <?php $date=date("20y-m-d");
            ?>
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="date" class="form-control" min='<?php echo $date; ?>' required>
                  </div>
          
             
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="logbook">Add Logbook</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         </div>
         <?php }
         else{
          $row=mysqli_fetch_assoc($query);
          ?>
               <h3 class="card-title">Week <?php echo $week; ?> Personal logbook For <?php echo $user; ?></h3>
                     <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
         
              <form id="quickForm" action="" method="post"  enctype="multipart/form-data">
                <div class="card-body">
               <!--    <div class="form-group">
                    <label for="exampleInputEmail1">Week</label>
                    <input type="month" name="week" class="form-control"  placeholder="Eg. 001/nrb" required>
                  </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Day 1</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day1']; ?></textarea>
                    <label for="exampleInputEmail1">Day 2</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day2']; ?></textarea>
                    <label for="exampleInputEmail1">Day 3</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day3']; ?></textarea>
                    <label for="exampleInputEmail1">Day 4</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day4']; ?></textarea>
                    <label for="exampleInputEmail1">Day 5</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day5']; ?></textarea>
                    <label for="exampleInputEmail1">Day 6</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day6']; ?></textarea>
                    <label for="exampleInputEmail1">Day 7</label>
                    <textarea name="file" class="form-control"  readonly><?php echo $row['Day7']; ?></textarea>
                    <label for="exampleInputEmail1">Student Comment</label>
                    <textarea name="Scomment" class="form-control"  readonly><?php echo $row['StudentComments']; ?></textarea>
                    <label for="exampleInputEmail1">Company Supervisor Comments</label>
                    <textarea name="comments" class="form-control"  <?php if($row['CompanySupervisorComments']!=""){echo "readonly";}?>><?php echo $row['CompanySupervisorComments']; ?></textarea>
                    <label for="exampleInputEmail1">University Based Supervisor Comments</label>
                    <textarea class="form-control" name="comment" readonly><?php echo $row['UniversityBasedSupervisorComments']; ?></textarea>
                    <label for="exampleInputEmail1">Marks</label>
                    <textarea name="file" class="form-control"  readonly><?php if($row['Marks']==0) {echo "Not marked"; } else {echo $row['Marks'];}?></textarea>
                  
                  </div>
             <input type="hidden" name="email" value="<?php echo $mail;  ?>">
           <div class="form-group">
            <?php $date=date("20y-m-d");
            ?>
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="date" value="<?php echo $row['date']; ?>" class="form-control" min='<?php echo $date; ?>' readonly>
                  </div>
             <input type="submit" class="btn btn-primary" name="update" value="Update Comment">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
              
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         </div>
          <?php
         }
         if(isset($_POST['update']))
         {
            $comment=$_POST['comments'];
            $connect=mysqli_connect("localhost","root","","attachment");
            $sql1="update elogbook set CompanySupervisorComments='$comment' where email='$user' and week='$week'";
            $query1=mysqli_query($connect,$sql1);
            if($query)
            {
                echo "<script>alert('Successfully Updated');<script>";
                header("location:logbook.php?week=$week &&student=$user");
            }
            else{
                echo "There was an error try again ".mysqli_error($connect);
            }
         }
 ?>
         
          </div>
          <!-- /.col -->
        </div>
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
