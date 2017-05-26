<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Hahiraha.com</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
		include('nav.php');
	?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3 class="text-center">
                <?php
                 include('connect.php');
                 $sid=$_REQUEST['product'];
					$pipsql = mysqli_query($dbcon,"SELECT * FROM products WHERE ID='$sid' ORDER BY ID DESC LIMIT 0,9");
                    while($row=mysqli_fetch_array($pipsql)){
                        echo'Product: '.$row['Name'].'<br/>Price: '.$row['Price'];
                    }
                ?>
                </h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!-- SINGLE POST -->
            <div class="col-lg-8">
            <?php
                 include('connect.php');
                 $sid=$_REQUEST['product'];
					$pipsql = mysqli_query($dbcon,"SELECT * FROM products WHERE ID='$sid' ORDER BY ID DESC LIMIT 0,9");
                    while($row=mysqli_fetch_array($pipsql)){
                    echo'
                        
                <div class="panel">
                            <div class="col-lg-12 centered">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture01'].'" alt=""></div>
							</div>
							<div class="item active">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture02'].'" alt=""></div>
							</div>
							<div class="item">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture03'].'" alt=""></div>
							</div>
                            <div class="item">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture04'].'" alt=""></div>
							</div>
                            <div class="item">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture05'].'" alt=""></div>
							</div>
                            <div class="item">
								<div align="center"><img style="position:relative;height:300px" src="'.$row['Picture06'].'" alt=""></div>
							</div>
						</div>
						</div><!--/Carousel -->
					</div>
                            <a href="#"><h3 class="ctitle text-center">'.$row['Name'].' <br/>Price: '.$row['Price'].'</h3></a>
                            <div class="spacing"></div>
                            <h6>SHARE:</h6>
                            <p class="share">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>		 		
                            </p>
                            <div class="col-lg-12">
                                <h3 class="page-header">More Images</h3>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture01'].'" alt=""></div>
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture02'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture03'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture04'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture04'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture05'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture06'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture07'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture08'].'" alt=""></div>
                                </a>
                            </div>

                            <div class="col-sm-3 col-xs-6">
                                <a href="#">
                                    <div align="center"><img style="position:relative;height:150px;padding:10px" class="img-responsive img-hover img-related" src="'.$row['Picture09'].'" alt=""></div>
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title text-center" id="myModalLabel">Make a deal</h4>
                                        </div>
                            <form method="post" action="operations/orders.php">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Enter your name please:</label>
                                                <input class="form-control" type="text" name="client" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>And your phone number:</label>
                                                <input class="form-control" type="tel" name="phone" required/>
                                                <input style="visibility:hidden" class="form-control" type="text" name="pro" value="'.$row['ID'].'"/>
                                                <input style="visibility:hidden" class="form-control" type="text" name="proId" value="'.$row['Name'].'"/>
                                                <input style="visibility:hidden" class="form-control" type="text" name="seller" value="'.$row['Sellers'].'"/>
                                            </div>
                                            <div class="form-group">
                                                <label>More about your deal:</label>
                                                <textarea class="form-control" rows="3" name="content" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button> | 
                                            <input type="submit" name="pooh" class="btn btn-primary" value="Save changes"/> | 
                                            <input type="reset" class="btn btn-warning" value="Reset"/>
                                        </div>
                            </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                </div>
                <div class="col-lg-12">';
                echo'<p class="text-center"><button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Make a deal</button></p>';
                echo'</div>
            </div>

            <div class="col-lg-4">
                <h3>Product or Service Description</h3>
                <p class="text-center">'.$row['About'].'</p>
                <p><csmall>Posted: '.$row['Date'].'</csmall> | <csmall2>By: '.$row['Sellers'].'</csmall2></p>
                <h3>Product or Service Details</h3>
                <ul>
                    <li>Quanity in store: '.$row['Quantity'].'</li>
                    <li>Categorie: '.$row['Categorie'].'</li>
                    <li>Place: '.$row['Province'].', '.$row['District'].', '.$row['Sector'].'</li>
                    <li>Phone number: '.$row['Phone'].'</li>
                </ul>
                    ';
                    $inchuro = $row["Views"];
					$inchuro++;
                    $_sql = "UPDATE products SET Views='$inchuro' WHERE id='$sid'";
                    mysqli_query( $dbcon,$_sql); 
                    }
            ?>
            <div class="spacing"></div>
		 		
		 		<?php
					include('recentposts.php');
				?>
            </div>
		 		
	 	</div><!--/row -->
	 </div><!--/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php
        include("footer.php");
     ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery -->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="dashboard/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dashboard/dist/js/sb-admin-2.js"></script>


  </body>
</html>
