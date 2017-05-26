<?php
    session_start();
    $_SESSION['admin'];
    if(!isset($_SESSION['admin'])){
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
        include('navuser.php');
      ?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Add a product
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
                <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-comments fa-fw"></i> Chat
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu slidedown">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-refresh fa-fw"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-check-circle fa-fw"></i> Available
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-times fa-fw"></i> Busy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-clock-o fa-fw"></i> Away
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div style="vertical-align:auto" class="panel-body">
                                <div class="chat">
                                <?php
                                include('../connect.php');
                                $adminn=$_REQUEST['id'];
                                $sqli="SELECT * FROM seller WHERE Name='$adminn' ORDER BY ID DESC";
                                $resulttt=mysqli_query($dbcon,$sqli);
                                while ($rrow=mysqli_fetch_assoc($resulttt)) {
                                    $rrrow = $rrow['Name'];
                                    $picseller = $rrow['Picture01'];
                                }
                                $adminnn=$_SESSION['admin'];
                                $sqliii="SELECT * FROM Admin WHERE ID=1 ORDER BY ID DESC";
                                $resultttt=mysqli_query($dbcon,$sqliii);
                                while ($rroww=mysqli_fetch_assoc($resultttt)) {
                                    $rrroww = $rroww['Name'];
                                    $picadmin = $rroww['Picture01'];
                                }
                                $sqliiii="SELECT ID,User,Toooo,Reason,Content,Date FROM MessageToSeller WHERE Toooo='$rrrow' UNION ALL SELECT ID,User,NULL,Reason,Content,Date FROM MessageToAdmin WHERE User='$rrrow' ORDER BY ID DESC";
                                $resulttttt=mysqli_query($dbcon,$sqliiii);
                                while($jayrow=mysqli_fetch_array($resulttttt)){
                                if(!(isset($jayrow['Toooo']))){
                                    echo'
                                        <div style="padding:5px 5px 5px 5px" class="left clearfix">
                                            <span class="chat-img pull-left">
                                                <img style="width:64px;height:64px" src="../'.$picseller.'" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">'.$rrrow.'</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> '.$jayrow['Date'].'
                                                    </small>
                                                </div>
                                                <p class="text-center">
                                                    '.$jayrow['Content'].'
                                                </p>
                                            </div>
                                        </div>';
                                }else{
                                        echo'
                                        <div style="padding:5px 5px 5px 5px" class="right clearfix">
                                            <span class="chat-img pull-right">
                                                <img style="width:64px;height:64px" src="../'.$picadmin.'" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> '.$jayrow['Date'].'</small>
                                                    <strong class="pull-right primary-font">'.$rrroww.'</strong>
                                                </div>
                                                <p class="text-center">
                                                    '.$jayrow['Content'].'
                                                </p>
                                            </div>
                                        </div>';
                                    }
                                }
                                ?>
                               <div id="here"></div> 
                                </div>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                            <form action="../operations/operatoadmin.php" method="post">
                                <?php
                                    $myuse=$_SESSION['admin'];
                                    echo'
                                    <input style="visibility:hidden" name="user" type="text" class="form-control input-sm" value="'.$myuse.'" />
                                    <input style="visibility:hidden" name="to" type="text" class="form-control input-sm" value="'.$_REQUEST['id'].'" />';
                                ?>
                                <div class="input-group">
                                    <label>RE:
                                    <input id="btn-input" name="reason" type="text" class="form-control input-md" placeholder="Type your Reason here..."/>
                                    </label>
                                </div>
                                <div class="input-group">
                                    <input id="btn-input" name="content" type="text" class="form-control input-sm" placeholder="Type your message here..." required/>
                                    <span class="input-group-btn">
                                        <button name="toadminn" type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </form>
                            </div>
                            <!-- /.panel-footer -->
                        </div>
          
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