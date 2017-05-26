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
				<h3 class="text-center"> Clubs.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!-- BLOG POSTS LIST -->
	 		<div class="col-lg-8">
	 			<div class="row">
				 <?php
					include('connect.php');
					$pipsql = mysqli_query($dbcon,"SELECT * FROM products WHERE Categorie='Clubs' ORDER BY ID DESC LIMIT 0,9");
					while($myrow = mysqli_fetch_array($pipsql)){
						echo'
					<div class="col-md-4 portfolio-item">
						<a href="#">
							<img style="position:relative;height:200px" class="img-responsive img-rounded" src="'.$myrow['Picture01'].'" alt="">
						</a><br />
						<h3>
							<a href="#">'.$myrow['Name'].'</a>
						</h3>
						<h6>Price: '.$myrow['Price'].'<br/>Seller: '.$myrow['Sellers'].'<br/>Place: '.$myrow['District'].', '.$myrow['Sector'].'<br/>Quantity in store: '.$myrow['Quantity'].'<br/>Tel: '.$myrow['Phone'].'<br/>Date: '.$myrow['Date'].'</h6>
						<p><a href="more.php?product='.$myrow['ID'].'" class="btn btn-info">More Details</a></p>
					</div>
						';
					}
				?>
				</div>
				<!-- /.row -->
			</div><!--/col-lg-8 -->
	 		
	 		
	 		<!-- SIDEBAR -->
	 		<div class="col-lg-4">
		 		
		 		<h4>Districts</h4>
		 		<div class="hline"></div>
			 		<p><a href="kicukiro.php"><i class="fa fa-angle-right"></i> Kicukiro</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="nyarugenge.php"><i class="fa fa-angle-right"></i> Nyarugenge</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="gasabo.php"><i class="fa fa-angle-right"></i> Gasabo</a> <span class="badge badge-theme pull-right">11</span></p>
                    <p><a href="burera.php"><i class="fa fa-angle-right"></i> Burera</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="musanze.php"><i class="fa fa-angle-right"></i> Musanze</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="gakenke.php"><i class="fa fa-angle-right"></i> Gakenke</a> <span class="badge badge-theme pull-right">11</span></p>
			 		<p><a href="gicumbi.php"><i class="fa fa-angle-right"></i> Gicumbi</a> <span class="badge badge-theme pull-right">7</span></p>
			 		<p><a href="rulindo.php"><i class="fa fa-angle-right"></i> Rulindo</a> <span class="badge badge-theme pull-right">12</span></p>
                    <p><a href="huye.php"><i class="fa fa-angle-right"></i> Huye</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="gisagara.php"><i class="fa fa-angle-right"></i> Gisagara</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="nyaruguru.php"><i class="fa fa-angle-right"></i> Nyaruguru</a> <span class="badge badge-theme pull-right">11</span></p>
			 		<p><a href="nyanza.php"><i class="fa fa-angle-right"></i> Nyanza</a> <span class="badge badge-theme pull-right">5</span></p>
			 		<p><a href="ruhango.php"><i class="fa fa-angle-right"></i> Ruhango</a> <span class="badge badge-theme pull-right">7</span></p>
					<p><a href="nyamagabe.php"><i class="fa fa-angle-right"></i> Nyamagabe</a> <span class="badge badge-theme pull-right">7</span></p>
			 		<p><a href="muhanga.php"><i class="fa fa-angle-right"></i> Muhanga</a> <span class="badge badge-theme pull-right">12</span></p>
                    <p><a href="kamonyi.php"><i class="fa fa-angle-right"></i> Kamonyi</a> <span class="badge badge-theme pull-right">12</span></p>
                    <p><a href="karongi"><i class="fa fa-angle-right"></i> Karongi</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="nyabihu.php"><i class="fa fa-angle-right"></i> Nyabihu</a> <span class="badge badge-theme pull-right">11</span></p>
			 		<p><a href="rubavu.php"><i class="fa fa-angle-right"></i> Rubavu</a> <span class="badge badge-theme pull-right">5</span></p>
			 		<p><a href="nyamasheke.php"><i class="fa fa-angle-right"></i> Nyamasheke</a> <span class="badge badge-theme pull-right">7</span></p>
			 		<p><a href="rusizi.php"><i class="fa fa-angle-right"></i> Rusizi</a> <span class="badge badge-theme pull-right">12</span></p>
					<p><a href="rutsiro.php"><i class="fa fa-angle-right"></i> Rutsiro</a> <span class="badge badge-theme pull-right">12</span></p>
					<p><a href="ngororero.php"><i class="fa fa-angle-right"></i> Ngororero</a> <span class="badge badge-theme pull-right">12</span></p>
                    <p><a href="rwamagana.php"><i class="fa fa-angle-right"></i> Rwamagana</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="kayonza.php"><i class="fa fa-angle-right"></i> Kayonza</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="nyagatare.php"><i class="fa fa-angle-right"></i> Nyagatare</a> <span class="badge badge-theme pull-right">11</span></p>
			 		<p><a href="kirehe.php"><i class="fa fa-angle-right"></i> Kirehe</a> <span class="badge badge-theme pull-right">5</span></p>
			 		<p><a href="ngoma.php"><i class="fa fa-angle-right"></i> Ngoma</a> <span class="badge badge-theme pull-right">7</span></p>
			 		<p><a href="bugesera.php"><i class="fa fa-angle-right"></i> Bugesera</a> <span class="badge badge-theme pull-right">12</span></p>
					<p><a href="gatsibo.php"><i class="fa fa-angle-right"></i> Gatsibo</a> <span class="badge badge-theme pull-right">12</span></p>

		 		<div class="spacing"></div>
		 		
		 		<?php
					include('recentposts.php');
				?>
		 		
		 		<h4>Popular Tags</h4>
		 		<div class="hline"></div>
		 			<p>
		            	<a class="btn btn-theme" href="boutique.php" role="button">Boutique</a>
		            	<a class="btn btn-theme" href="resto.php" role="button">Restaurants</a>
		            	<a class="btn btn-theme" href="hospital.php" role="button">Hospital</a>
		            	<a class="btn btn-theme" href="pharma.php" role="button">Pharmacies</a>
		            	<a class="btn btn-theme" href="bar.php" role="button">Bars</a>
		            	<a class="btn btn-theme" href="club.php" role="button">Clubs</a>
		            	<a class="btn btn-theme" href="agency.php" role="button">Agencies</a>
		            	<a class="btn btn-theme" href="moto.php" role="button">Moto-taxi</a>
		            	<a class="btn btn-theme" href="supermarket.php" role="button">supermarkets</a>
		            	<a class="btn btn-theme" href="market.php" role="button">Markets</a>
		            	<a class="btn btn-theme" href="lodge.php" role="button">Lodges</a>
		            	<a class="btn btn-theme" href="farmer.php" role="button">Farmers</a>		            	
		            	<a class="btn btn-theme" href="uni.php" role="button">Universities</a>		            	
		            	<a class="btn btn-theme" href="school.php" role="button">Schools</a>		            	 		            	<a class="btn btn-theme" href="hotel.php" role="button">Hotels</a> 						<a class="btn btn-theme" href="building.php" role="button">Quincalleries</a><a class="btn btn-theme" href="tools.php" role="button">Tools</a>		            	
		 			</p>
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
