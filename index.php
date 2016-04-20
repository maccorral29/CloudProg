<?php  
include 'core/init.php';
  
if(logged_in() === FALSE) {
    header('Location: pages/signin.php');
    exit();
}
?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASEED | HOME</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">

  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">

  <link rel="stylesheet" href="dist/css/aseed.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">


</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">


    <a href="index.php" class="logo">

      <span class="logo-mini"><b>A</b></span>

      <span class="logo-lg"><b>ASEED</b></span>
    </a>

     <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

              <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gear"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">


              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="pages/student.php" class="btn btn-default btn-flat">My Students</a>
                </div>
                <div class="pull-right">
                  <a href="pages/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
      </ul>
      </div>

    </nav>
  </header>
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>My Files</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/student.php"><i class="fa fa-circle-o"></i>My Students</a></li>
            <?php

            $conn = mysql_connect("localhost","root","");
                    if (!$conn) {
                       die('Could not connect: ' . mysql_error());
                       }
                    mysql_select_db("mydb", $conn);


                    $result = mysql_query("SELECT * FROM Register where Reg_ID=". $_SESSION['Reg_ID']);
                   $row = mysql_fetch_array($result);

                    
                    $user_type = $row['usertype'];

            if($user_type == 'Admin'){
            echo "<li><a href='pages/lists.php'><i class='fa fa-circle-o'></i>List of SpEd Teachers</a></li>";
          }
          ?>
          </ul>
        </li>

        <?php

            $conn = mysql_connect("localhost","root","");
                    if (!$conn) {
                       die('Could not connect: ' . mysql_error());
                       }
                    mysql_select_db("mydb", $conn);

    
                    $result = mysql_query("SELECT * FROM Register where Reg_ID=". $_SESSION['Reg_ID']);
                   $row = mysql_fetch_array($result);

                    
                    $user_type = $row['usertype'];

            if($user_type == 'Admin'){
        echo "<li class='treeview'>"
         . " <a href='pages/register.php'>"
          . "<i class='fa fa-pencil-square-o'></i>"
           . "<span>Register</span>"
          . "</a>"
       . " </li>";
      }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main Page -->

    <section class= "content">
        <br>
          <div class="box box-success">
            <div class="box-header">
              <h1><strong>Anne Sullivan Exemplar Enabling Discipline</strong></h1>
              <div class="item">
                <br><p><img src="images/kid.gif" alt="" width="225" height="225" style="float:left;" />Anne Sullivan Exemplar Enabling Discipline (ASEED) is an organization that consists of three main persons who are involved in rendering services to a Person with Disabilities (PWD) of any age with the objective of attaining independence in almost all skills. These three persons have extensive SPED experiences in the Philippines and in the USA. Two of whom have a PhD in SPED from University of the Philippines and the last has a lifetime California Credential in Moderate/Severe, Early Childhood and Orthopedic Impairments. <br><br>
                            The system can be used by three different types of users. Each user has a specific capability and role in the whole process. The system allows all of its users to view a students profile. Only the SpEd teacher and therapist can edit the  students profile, create and view assessment and IEP. The guardian can only view the students profile and IEP. </p>
                </div>
             </div>
           </div>

    </section>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>TEAM ASEED &copy; 2015-2016</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
