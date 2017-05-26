<?php
    session_start();
    $_SESSION['seller'];
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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
            Chat wit admin here.
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Messages</a></li>
            <li><a href="#">Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                  <div class="chat-panel panel panel-success">
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
                                $sqli="SELECT * FROM seller WHERE Name='$adminn' ORDER BY ID DESC";
                                $resulttt=mysqli_query($dbcon,$sqli);
                                while ($rrow=mysqli_fetch_assoc($resulttt)) {
                                    $sellerId= $rrow['ID'];
                                    $rrrow = $rrow['Name'];
                                    $picseller = $rrow['Picture01'];
                                }
                                $sqliii="SELECT * FROM Admin WHERE ID=1 ORDER BY ID DESC";
                                $resultttt=mysqli_query($dbcon,$sqliii);
                                while ($rroww=mysqli_fetch_assoc($resultttt)) {
                                    $rrroww = $rroww['Name'];
                                    $picadmin = $rroww['Picture01'];
                                }
                                $sqliiii="SELECT User,Toooo,Reason,Content,Date FROM MessageToSeller WHERE Toooo='$rrrow' UNION ALL SELECT User,NULL,Reason,Content,Date FROM MessageToAdmin WHERE User='$rrrow' ORDER BY Date ASC";
                                $resulttttt=mysqli_query($dbcon,$sqliiii);
                                while($jayrow=mysqli_fetch_array($resulttttt)){
                                if(isset($jayrow['Toooo'])){
                                    echo'
                                        <div style="padding:5px 5px 5px 5px" class="left clearfix">
                                            <span class="chat-img pull-left">
                                                <img style="width:64px;height:64px" src="../'.$picadmin.'" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">'.$rrroww.'</strong>
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
                                                <img style="width:64px;height:64px" src="../'.$picseller.'" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> '.$jayrow['Date'].'</small>
                                                    <strong class="pull-right primary-font">'.$rrrow.'</strong>
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
                                    $sellerId=$_SESSION['idd'];
                                    echo'
                                    <input style="visibility:hidden" name="user" type="text" class="form-control input-sm" value="'.$rrrow.'" />
                                    <input style="visibility:hidden" name="to" type="text" class="form-control input-sm" value="'.$sellerId.'" />';
                                ?>
                                <div class="input-group">
                                    <label>RE:
                                    <input id="btn-input" name="reason" type="text" class="form-control input-md" placeholder="Type your Reason here..."/>
                                    </label>
                                </div>
                                <div class="input-group">
                                    <input id="btn-input" name="content" type="text" class="form-control input-sm" placeholder="Type your message here..." required/>
                                    <span class="input-group-btn">
                                        <button name="toadmin" type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </form>
                            </div>
                            <!-- /.panel-footer -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include("footer.php");
      ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
