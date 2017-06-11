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
                <div class="box">
                    <div class="box-body">
                      <?php
                            $yes=isset($_REQUEST['yes']);
                                if($yes){
                                echo'
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    Product added <a href="#" class="alert-link">More Details</a>.
                                                </div>
                                                ';
                                }
                        ?>
                                <form role="form" method="post" action="../operations/operaddproducts.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name of your product or service</label>
                                            <input class="form-control" type="text" name="item" placeholder="Enter your product or service name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="text" name="price" placeholder="Enter the price of your product" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline1" value="$" checked>Dollars
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline1" value="Pounds">Pound
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline1" value="Euro">Euro
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline2" value="Rfw">Rwandan Francs
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Ugandan Shillings">UG Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Kenyan Shillings">Kenyan Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Tanzanian Shillings">TZ Shillings
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currency" id="optionsRadiosInline3" value="Burundian Francs">Burundian Francs
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Select pictures of your product or service...</label>
                                            <input name="picone" type="file" required>
                                            <input name="pictwo" type="file">
                                            <input name="picthree" type="file">
                                            <input name="picfour" type="file">
                                            <input name="picfive" type="file">
                                            <input name="picsix" type="file">
                                            <input name="picseven" type="file">
                                            <input name="piceight" type="file">
                                            <input name="picnine" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <select name="quantity" class="form-control">
                                            <?php
                                                for($i=1;$i<=200;$i++){
                                                    echo'<option>'.$i.'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>More about your product or service...</label>
                                            <textarea class="form-control" name="about" rows="3" required></textarea>
                                        </div>
                                        <?php
                                        $seller= $_SESSION ['admin'];
                                        echo'
                                        <div style="visibility:hidden" class="form-group">
                                            <label>Seller</label>
                                            <input class="form-control" name="seller" type="text" value="'.$seller.'" required>
                                        </div>';
                                        ?>
                                        <div class="form-group">
                                            <label>Seller's phone number</label>
                                            <input class="form-control" name="phone" type="tel" placeholder="Example +250 788 888 888" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Select your company client's classes </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="classes" id="optionsRadiosInline1" value="Low_Class" checked>Low Class
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="classes" id="optionsRadiosInline2" value="Middle_Class">Middle Class
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="classes" id="optionsRadiosInline3" value="High_Class">High Class
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Select your province</label>
                                            <select name="province" class="form-control">
                                                <option> Kigali City </option>
                                                <option> Southern Province </option>
                                                <option> Northern Province </option>
                                                <option> Eastern Province </option>
                                                <option> Western Province </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>District</label>
                                            <input class="form-control" list="dis" name="district" type="text" placeholder="Enter your district" autocomplete required>
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
                                            <input class="form-control" name="sector" type="text" placeholder="Enter your sector" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="form-control" name="categorie" type="text" placeholder="Enter your type of products or services">
                                                <option value="Clothes">Clothes</option>
                                                <option value="Food">Food</option>
                                                <option value="Tools">Tool</option>
                                                <option value="Boutique">Boutique</option>
                                                <option value="Resto">Restaurant</option>
                                                <option value="Hospital">Hospital</option>
                                                <option value="Pharmacy">Pharmacy</option>
                                                <option value="Bars">Bar</option>
                                                <option value="Clubs">Club</option>
                                                <option value="Agency">Agency</option>
                                                <option value="Moto">Moto-taxi</option>
                                                <option value="Supermarkets">Supermarket</option>
                                                <option value="Markets">Market</option>
                                                <option value="Lodges">Lodge</option>
                                                <option value="Farmers">Farmer</option>
                                                <option value="Universities">University</option>
                                                <option value="Schools">School</option>
                                                <option value="Hotels">Hotel</option>
                                                <option value="Services">Service</option>
                                                <option value="Buildings">Quincallerie</option>
                                            </select>
                                        </div>
                            <div class="box-footer text-center">
                                <button type="submit" name="yeahh"class="btn btn-primary">Save your product</button>
                            </div>
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