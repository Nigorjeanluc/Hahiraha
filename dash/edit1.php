<?php
    session_start();
    if(!isset($_SESSION['seller'])){
        echo "<meta http-equiv='refresh' content='0;url=../operations/login.php?no=0'>";
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Hahiraha</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php
        include('navuser1.php');
      ?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Edit your profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Profile</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
                <div style="background:none" class="box">
                    <div class="box-body">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                include('../connect.php');
                                $admin=$_SESSION['seller'];
                                $sqli="SELECT * FROM seller WHERE Name='$admin' ORDER BY ID DESC";
                                $result=mysqli_query($dbcon,$sqli);
                                while ($row=mysqli_fetch_assoc($result)) {
                                echo'
                                    <form role="form" action="../operations/operaeditadmin.php" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Profile picture
                                            </div>
                                            <div style="height:320px" class="panel-body">
                                                <div class="row text-center">
                                                    <br />
                                                    <img style="margin-top:30px;width:100px;height:100px" class="img-rounded" src="../'.$row['Picture01'].'">
                                                    <br />
                                                </div>
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Other options
                                            </div>
                                            <div class="panel-body">
                                                <h1>Lastly Updated on <small>'.$row['Date'].'</small></h1>
                                                <div class="form-group">
                                                    <label>Change your phone number</label>
                                                    <input class="form-control" name="phone" type="tel" value="'.$row['Phone'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label>Change your email</label>
                                                    <input class="form-control" name="email" type="email" value="'.$row['Email'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label>Change your password</label>
                                                    <input class="form-control" name="password" type="text" value="'.$row['Password'].'">
                                                </div>
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <div class="panel-footer text-center">
                                <button type="submit" name="editt"class="btn btn-primary">Save</button>
                            </div>
                            </form>';
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
          </div><!-- /.row -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include('footer.php');
      ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>