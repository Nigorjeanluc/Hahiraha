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
				<h3 class="text-center">Kigali City.</h3>
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
					$pipsql = mysqli_query($dbcon,"SELECT * FROM products WHERE Province='Kigali City' ORDER BY ID DESC LIMIT 0,9");
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
		 		<!--<h4>Search</h4>
		 		<div class="hline"></div>
		 			<p>
		 				<br/>
		 				<input type="text" class="form-control" placeholder="Search something">
		 			</p>
		 			
		 		<div class="spacing"></div>-->
		 		
		 		<h4>Districts</h4>
		 		<div class="hline"></div>
			 		<p><a href="kicukiro.php"><i class="fa fa-angle-right"></i> Kicukiro</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="nyarugenge.php"><i class="fa fa-angle-right"></i> Nyarugenge</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="gasabo.php"><i class="fa fa-angle-right"></i> Gasabo</a> <span class="badge badge-theme pull-right">11</span></p>

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
