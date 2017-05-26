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

    <!-- Bootstrap Core CSS -->
    <!--<link href="dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- MetisMenu CSS -->
    <!--<link href="dashboard/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="dashboard/dist/css/sb-admin-2.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <!--<link href="dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
  
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
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>Hahiraha.com is a Rwandan Market with producers and traders from all over corners of this beautiful country.</h3>
					<h1>Kubamamariza ni inshingano zacu, Uwatugannye ntataha amara masa.</h1>				
				</div>
				<div class="col-lg-8 col-lg-offset-2 himg">
					<h5>Do you what more on new products or new updates.</h5>
					<!--<h5>Sign in with as here.</h5>
					<h5><button type="button" class="btn btn-success">Login</button> or <button type="button" class="btn btn-primary">SignUp</button></h5>-->
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
								<img style="position:relative;height:500px" src="assets/img/portfolio/kbssss.png" alt="">
							</div>
							<div class="item active">
								<img style="position:relative;height:500px" src="assets/img/portfolio/kbss.jpg" alt="">
							</div>
							<div class="item">
								<img style="position:relative;height:500px" src="assets/img/portfolio/kbsss.jpg" alt="">
							</div>
						</div>
						</div><!--/Carousel -->
					</div>
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	
	 
	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <!--<h3>LATEST WORKS</h3>-->

            <!-- Page Content -->
			<div class="container">

				<!-- Page Header -->
				<div class="row">
					<div class="col-lg-12">
						<h1 id="start" class="page-header">Recent Updates
							<small>New products and services everyday.</small>
						</h1>
					</div>
				</div>
				<!-- /.row -->

				<!-- Projects Row -->
				<div class="row">
				<?php
					include('connect.php');
					$pipsql = mysqli_query($dbcon,"SELECT * FROM products ORDER BY ID DESC LIMIT 0,9");
					while($myrow = mysqli_fetch_array($pipsql)){
						echo'
					<div class="col-md-4 portfolio-item">
						<a href="#">
							<img style="position:relative;height:250px" class="img-responsive img-rounded" src="'.$myrow['Picture01'].'" alt="">
						</a><br />
						<h3>
							<a href="#">'.$myrow['Name'].'</a>
						</h3>
						<h6>Price: '.$myrow['Price'].'<br/>Seller: '.$myrow['Sellers'].'<br/>Place: '.$myrow['Province'].', '.$myrow['District'].', '.$myrow['Sector'].'<br/>Quantity in store: '.$myrow['Quantity'].'<br/>Tel: '.$myrow['Phone'].'<br/>Date: '.$myrow['Date'].'</h6>
						<p><a href="more.php?product='.$myrow['ID'].'" class="btn btn-info">More Details</a></p>
					</div>
						
						';
					}
				?>
				</div>

        <!-- Pagination -->
		<!--
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
		-->
        <!-- /.row -->
    </div>
	 </div><!--/Portfoliowrap -->
	 
	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <!--<div id="service">
	 	<div class="container">
 			<div class="row centered">
 				<div class="col-md-4">
 					<i class="fa fa-shopping-cart"></i>
 					<h4>Nearby Supermarket.</h4>
 					<p><br><a href="supermarket.php" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-euro"></i>
 					<h4>Money exchange</h4>
 					<p><br><a href="forex.php" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-home"></i>
 					<h4>Strong building materials</h4>
 					<p><br><a href="building.php" class="btn btn-theme">More Info</a></p>
 				</div>
				<div class="col-md-4">
 					<i class="fa fa-truck"></i>
 					<h4>Shipping facilities</h4>
 					<p><br><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-user-md"></i>
 					<h4>Different Clinics and pharmaceutical accessoires</h4>
 					<p><br><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-gears"></i>
 					<h4>Different mechanics facilities</h4>
 					<p><br><a href="#" class="btn btn-theme">More Info</a></p>
 				</div>		 				
	 		</div>
	 	</div>
	 </div>--><!--/service -->
	 
	<!-- *****************************************************************************************************************
	 MIDDLE CONTENT
	 ***************************************************************************************************************** -->

	 <!--
	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-4 col-lg-offset-1">
		 		<h4>More About Our Agency.</h4>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
 				<p><br/><a href="about.html" class="btn btn-theme">More Info</a></p>
	 		</div>
	 		
	 		<div class="col-lg-3">
	 			<h4>Frequently Asked</h4>
	 			<div class="hline"></div>
	 			<p><a href="#">How cool is this theme?</a></p>
	 			<p><a href="#">Need a nice good-looking site?</a></p>
	 			<p><a href="#">Is this theme retina ready?</a></p>
	 			<p><a href="#">Which version of Font Awesome uses?</a></p>
	 			<p><a href="#">Free support is integrated?</a></p>
	 		</div>
	 		
	 		<div class="col-lg-3">
	 			<h4>Latest Posts</h4>
	 			<div class="hline"></div>
	 			<p><a href="single-post.html">Our new site is live now.</a></p>
	 			<p><a href="single-post.html">Retina ready is not an option.</a></p>
	 			<p><a href="single-post.html">Bootstrap 3 framework is the best.</a></p>
	 			<p><a href="single-post.html">You need this theme, buy it now.</a></p>
	 			<p><a href="single-post.html">This theme is what you need.</a></p>
	 		</div>
	 		
	 	</div>
	 </div>-->
	 <!--/row -->
	 <!--/container -->
	 
	<!-- *****************************************************************************************************************
	 TESTIMONIALS
	 ***************************************************************************************************************** -->
	 <div id="twrap">
	 	<div class="container centered">
	 		<div class="row">
	 			<div class="col-lg-8 col-lg-offset-2">
	 			<i class="fa fa-comment-o"></i>
	 			<p>Our aim is to provide enough information about traders where you can access their addresses and products in an easy way.</p>
	 			<h4><br/>Online Marketing System.</h4>
	 			<p>WEB APPLICATION - HAHIRAHA.COM Ltd.</p>
	 			</div>
	 		</div><!--/row -->
	 	</div><!--/container -->
	 </div><!--/twrap -->
	 
	<!-- *****************************************************************************************************************
	 OUR CLIENTS
	 ***************************************************************************************************************** -->
	 <div id="cwrap">
		 <div class="container">
		 	<div class="row centered">
			 	<h3>ADVERTSMENT</h3>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/images.jpg" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/mbiii.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/mbi.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/mbii.png" class="img-responsive">
			 	</div>
		 	</div><!--/row -->
		 </div><!--/container -->
	 </div><!--/cwrap -->

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php
		include('footer.php');
	 ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="dashboard/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dashboard/dist/js/sb-admin-2.js"></script>


    <script>
// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
				
		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});
		
		function getColumnNumber() { 
			var winWidth = $(window).width(), 
			columnNumber = 1;
		
			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}       
			
			function setColumns() {
				var winWidth = $(window).width(), 
				columnNumber = getColumnNumber(), 
				itemWidth = Math.floor(winWidth / columnNumber);
				
				$container.find('.portfolio-item').each(function() { 
					$(this).css( { 
					width : itemWidth + 'px' 
				});
			});
		}
		
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
			
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
		
		$(window).on('resize', function () { 
		setPortfolio();          
	});
})(jQuery);
</script>
  </body>
</html>
