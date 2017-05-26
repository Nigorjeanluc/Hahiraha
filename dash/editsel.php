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
            Edit this seller
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Edit seller</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="box-body">
                            <?php
                            $yes=isset($_REQUEST['yes']);
                                if($yes){
                                echo'
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    Product Updated <a href="#" class="alert-link">More Details</a>.
                                                </div>
                                                ';
                                }
                        ?>
                         <?php
                                 $seller=$_REQUEST['id'];
                                 $sqli="SELECT * FROM seller WHERE ID='$seller' ORDER BY ID DESC";
                                 $result=mysqli_query($dbcon,$sqli);
                                 while($row=mysqli_fetch_array($result)){
                                     $id=$row['ID'];
                                     $name=$row['Name'];
                                     $price=$row['NameOfBusiness'];
                                     $email=$row['Email'];
                                     $more=$row['About'];
                                     $pass=$row['Password'];
                                     $phone=$row['Phone'];
                                     $province=$row['Province'];
                                     $district=$row['District'];
                                     $sector=$row['Sector'];
                                     $cat=$row['Categorie'];
                                 }
                        ?>
                                <form role="form" method="post" action="../operations/edit.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name of the seller</label>
                                            <input class="form-control" type="text" name="item" placeholder="Enter your product or service name" value="<?php echo $name; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input class="form-control" name="company" type="text" value="<?php echo $price; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?php echo $email; ?>" class="form-control" name="email" type="email" required>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone Number</label>
                                            <input value="<?php echo $phone; ?>" class="form-control" name="phone" type="tel" placeholder="Enter your company phone number" required>
                                            <input style="visibility:hidden" name="ID" type="text" value="<?php echo $id; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>More about your product or service...</label>
                                            <textarea class="form-control" name="about" rows="3" required><?php echo $more; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Seller's phone number</label>
                                            <input class="form-control" name="phone" type="tel" value="<?php echo $phone; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Select your province</label>
                                            <select name="province" class="form-control">
                                                <option> <?php echo $province; ?> </option>
                                                <option> Kigali City </option>
                                                <option> Southern Province </option>
                                                <option> Northern Province </option>
                                                <option> Eastern Province </option>
                                                <option> Western Province </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>District</label>
                                            <input class="form-control" list="dis" name="district" type="text" value="<?php echo $district; ?>" placeholder="Enter your district" autocomplete required>
                                                <datalist id="dis">
                                                    <option value="Kicukiro">
                                                    <option value="Gasabo">
                                                    <option value="Nyarugenge">
                                                    <option value="Burera">
                                                    <option value="Musanze">
                                                    <option value="Gicumbi">
                                                    <option value="Gakenke">
                                                    <option value="Rulindo">
                                                    <option value="Huye">
                                                    <option value="Gisagara">
                                                    <option value="Nyaruguru">
                                                    <option value="Nyamagabe">
                                                    <option value="Muhanga">
                                                    <option value="Nyanza">
                                                    <option value="Kamonyi">
                                                    <option value="Ruhango">
                                                    <option value="Karongi">
                                                    <option value="Nyabihu">
                                                    <option value="Rubavu">
                                                    <option value="Rusizi">
                                                    <option value="Nyamasheke">
                                                    <option value="Rutsiro">
                                                    <option value="Ngororero">
                                                    <option value="Rwamagana">
                                                    <option value="Nyagatare">
                                                    <option value="Kayonza">
                                                    <option value="Kirehe">
                                                    <option value="Ngoma">
                                                    <option value="Bugesera">
                                                    <option value="Gatsibo">
                                                </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label>Sector</label>
                                            <input class="form-control" name="sector" type="text" value="<?php echo $sector; ?>" placeholder="Enter your sector" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Categorie</label>
                                            <input class="form-control" name="categorie" type="text" value="<?php echo $cat; ?>" placeholder="Enter your type of products or services" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="text" value="<?php echo $pass; ?>" placeholder="Enter your password" required>
                                        </div>
                            </div>
                            <div class="box-footer text-center">
                                <button type="submit" name="poooh" class="btn btn-success">Save changes</button>
                        </form>
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