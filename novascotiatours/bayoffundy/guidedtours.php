<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Blue Diamond Tours has designed Bay of Fundy private sightseeing tour groups seeking a more personable service, or a more upscale way of enjoying the must see sites of Nova Scotia.">
	<meta name="keywords" content="Blue Diamond Tours, group tour, tours, customized, bay of fundy, sightseeing, flowerpots, new brunswick, nova scotia">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Rob Evans alacarde.ca">
    <link rel="icon" href="../favicon.ico">

    <title>Bay of Fundy tours and Sightseeing | Nova Scotia</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Scripts for this template -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/carousel.css" rel="stylesheet">
    <link href="../../css/btd2015.css" rel="stylesheet">
	

  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<!-- Fixed navbar -->
	
	<?php 
	global $page;
	$page = "tours";
	include('../../includes/nav.php');
	?>
	<div class="hero">
		<div class="container">
			<h1 class="page-title hidden-xs">Welcome to The Bay of Fundy
			<span class="welcome hidden-xs"> Customized Tours of Canada's Maritime Province</span></h1>
		</div>
			<?php 
				//if (empty($_GET["fb"])) {$fb="flowerpots";}
				$fb = (isset($_GET['fb']) ? $_GET['fb'] : "flowerpots");
				//if (!isset($fb)) {$header = "flowerpots";}
				$header = htmlspecialchars($fb);
			
			?>
			<img src="../../images/headers/<?php echo $header; ?>.jpg" alt="Bay of Fundy" class="img-responsive">
	
	</div>
	  <div class="container-fluid intro" role="top">
		<div class="container" role="top">
			  <div class="row">
				
				<div class="col-md-12 text-center">
					<h1 class="page-title visible-xs">Welcome to <br />The Bay of Fundy</h1>
					
					<p class="lead">Did you know 115 Billion tonnes of water flow in and out of the Bay Of Fundy twice every day? </p>
					<p>Known for its record breaking tides, no trip to the Maritimes is complete with out a trip to the Bay of Fundy.</p>
					<p>Blue Diamond Tours can show you the best of a finalist for the <em>New 7 Wonders of Nature</em>.</p>
					<a type="button" class="btn btn-lg btn-primary hidden-xs" href="testimonials.php">Read what our guests<br> say about us.</a>					
				</div>
				
			  </div>
		  </div>
	  </div>
	 <div class="container-fluid" role="top">
	
		<div class="container" role="top">
		  <div class="row">
			<div class="col-sm-12 text-center">
				<h1>Custom made Tours of The Bay of Fundy</h1>
				<p class="lead">Below are some samples of custom made tours we have made for people just like you.<br /> Each of these tours can be customized how you like to fit your needs. </p>
				<p><a type="button" class="btn btn-lg btn-primary" href="/contact.php">Contact us today.</a></p>
			</div>
			
		  </div>
		</div>
	</div>

	<div class="container tours">
		<div class="row">
			<?php include('../../includes/tours.php');?>
			<div class="col-sm-12">
				<p class="lead"><i>Please note:</i> The main season for visiting is between the Memorial Day and Columbus Day weekends.  </p>
			
				<p>Those planning on visiting before or after those dates may find some of the sites listed in our itineraries may not have opened or are closed for the season.  Rest assured that there are many exciting sites and activities in this province, so Blue Diamond Tours will adjust the itinerary during these times to ensure you have a wonderful visit.</p>
				
			</div>
		</div>
    </div> <!-- /container -->
    <div class="container theme-showcase" role="main">

		<div class="row quote">
			<article class="col-md-12">
				<div class="wrap quote">
					<div class="row">
						<div class="col-md-7">
							<h2>About the Bay of Fundy</h2>
							<p>The Bay of Fundy (French: Baie de Fundy) is a bay on the Atlantic coast of North America, on the northeast end of the Gulf of Maine between the Canadian provinces of New Brunswick and Nova Scotia, with a small portion touching the U.S. state of Maine. Some sources believe the name "Fundy" is a corruption of the French word "Fendu", meaning "split", while others believe it comes from the Portuguese funda, meaning "deep". </p>

<p>The Bay of Fundy is known for having the highest tidal range in the world. Rivaled by Ungava Bay in northern Quebec, King Sound in Western Australia, Gulf of Khambhat in India, and the Severn Estuary in the UK, it has one of the highest vertical tidal ranges in the world. The Guinness Book of World Records (1975) declared that Burntcoat Head, Nova Scotia has the highest tides in the world:</p>
<blockquote>The Natural World, Greatest Tides: The greatest tides in the world occur in the Bay of Fundy.... Burntcoat Head in the Minas Basin, Nova Scotia, has the greatest mean spring range with 14.5 metres (47.5 feet) and an extreme range of 16.3 metres (53.5 feet).</blockquote>
<p>Portions of the Bay of Fundy, Shepody Bay and Minas Basin, form one of six Canadian sites in the Western Hemisphere Shorebird Reserve Network, and is classified as a Hemispheric site.[3] It is administered by the provinces of New Brunswick and Nova Scotia, and the Canadian Wildlife Service, and is managed in conjunction with Ducks Unlimited Canada and the Nature Conservancy of Canada.</p>
<p>In July 2009, the Bay of Fundy was named as a finalist for the New 7 Wonders of Nature contest that ended in November 2011. It was not chosen as a wonder.</p>
<p>Traditional Mi'kmaq folklore states that the tides in the Bay of Fundy are caused by a giant whale splashing in the water. Oceanographers attribute it to tidal resonance resulting from a coincidence of timing: the time it takes a large wave to go from the mouth of the bay to the inner shore and back is practically the same as the time from one high tide to the next. During the 12.4-hour tidal period, 115 billion tonnes of water flow in and out of the bay. </p>
<p>The tides in the Bay of Fundy are semidiurnal. Semidiurnal tides are tides that have two highs and two lows each day. The height that the water rises and falls to each day during these tides are approximately equal. There are approximately six hours and thirteen minutes between each high and low tide.</p> 
<p class="text-muted">Source: <a href="https://en.wikipedia.org/wiki/Bay_of_Fundy" target=_blank>en.wikipedia.org/wiki/Bay_of_Fundy</a></p>
						</div>
						<div class="col-md-5">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448125.9290287737!2d-67.51426363943304!3d45.02150632380862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ca787d5965e4fa7%3A0xee010da77c4a4579!2sBay+of+Fundy!5e1!3m2!1sen!2sca!4v1448815486502" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					
				</div>
				
			</article>

		</div>
	</div>
	
	
<?php include('../../includes/footer.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/banner.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
	<script>

		
		// Hide all that do not match the subject
			$( ".tourdes" ).hide();
			$(".bayoffundy").show();
			
	</script>
  </body>
</html>
