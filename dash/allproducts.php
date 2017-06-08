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
        include('navuser.php');
      ?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Table of all products.
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> All products</a></li>
            <li><a href="#">Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <?php
                            $yes=isset($_REQUEST['yes']);
                                if($yes){
                                echo'
                                                <div class="alert alert-success alert-dismissable text-center">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    Product deleted.
                                                </div>
                                                ';
                                }
                        ?>
                  <table id="example1" class="table table-bordered table-striped">
                                                                        <thead>
                                        <tr>
                                            <th>Product Name </th>
                                            <th>Quantity </th>
                                            <th>Price </th>
                                            <th>Seller </th>
                                            <th>Province </th>
                                            <th>District </th>
                                            <th>Date </th>
                                            <th>Control </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include("../connect.php");
                                    $sqli="SELECT * FROM products ORDER BY ID DESC";
                                    $result=mysqli_query($dbcon,$sqli);
                                    while ($row=mysqli_fetch_assoc($result)) {
                                    echo'
                                        <tr class="odd gradeX">
                                            <td class="text-center">'.$row["Name"].'</td>
                                            <td class="text-center">'.$row["Quantity"].'</td>
                                            <td class="text-center">'.$row["Price"].'</td>
                                            <td class="text-center">'.$row["Sellers"].'</td>
                                            <td class="text-center">'.$row["Province"].'</td>
                                            <td class="text-center">'.$row["District"].'</td>
                                            <td class="text-center">'.$row["Date"].'</td>
                                            <td class="text-center">
                                                <p><a href="editpro.php?id='.$row['ID'].'" class="btn bg-olive">Edit</a></p>
                                                <p><a href="../operations/operadelproduct.php?del='.$row['ID'].'" class="btn bg-orange">Delete</a></p>
                                            </td>
                                        </tr>';
                                    }
                                    ?>
                                    </tbody>
                  </table><br />
                  <button class="btn btn-default" onClick="window.print()">Print</button>
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
