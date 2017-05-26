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
            Table of all messages.
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
              <div class="box">
                <div class="box-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name </th>
                                            <th>Reason </th>
                                            <th>Message </th>
                                            <th>Date </th>
                                            <th>Control </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include("../connect.php");
                                    $adm=$_SESSION['seller'];
                                    $sqli="SELECT * FROM seller WHERE Name='$adm' ORDER BY ID DESC";
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
                                    $sqliiii="SELECT ID,User,Toooo,Reason,Content,Date FROM MessageToSeller WHERE (Toooo='$rrrow' AND User='$rrroww') UNION ALL SELECT ID,User,NULL,Reason,Content,Date FROM MessageToAdmin WHERE User='$rrrow' ORDER BY Date ASC limit 0,5";
                                    $resulttttt=mysqli_query($dbcon,$sqliiii);
                                    while($jayrow=mysqli_fetch_array($resulttttt)){
                                    echo'
                                        <tr class="odd gradeX">
                                            <td class="text-center">'.$jayrow["User"].'</td>
                                            <td class="text-center">'.$jayrow["Reason"].'</td>
                                            <td class="text-center">'.$jayrow["Content"].'</td>
                                            <td class="text-center">'.$jayrow["Date"].'</td>
                                            <td class="text-center">
                                                <p><a href="saytoadmin.php?id='.$jayrow['User'].'#here" class="btn btn-info">More Details</a></p>
                                            </td>
                                        </tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include("footer.php");
      ?>
    </div><!-- ./wrapper -->

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
