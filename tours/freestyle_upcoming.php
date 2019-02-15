<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="List of upcoming free style tours by Blue Diamond Tours">
	<meta name="keywords" content="Blue Diamond Tours, free style tours ">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Rob Evans alacarde.ca">
    <link rel="icon" href="../favicon.ico">

    <title>Upcoming Free Style Tours | Nova Scotia</title>

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
	include('../includes/nav.php');?>
 
	   	<div class="hero">
			<div class="container">
				<h1 class="page-title">Free Style Tours
				<span class="welcome"> <span class="hidden-xs">Customized Tours of Canada's Maritime Province</span></span></h1>
			</div>
			<img src="../../images/headers/bluediamondcollection.jpg" alt="Bay of Fundy" class="img-responsive">
		</div>
	  	<div class="container-fluid intro" role="top">
		<div class="container" role="top">
		 <div class="row">
			
			<div class="col-md-12 text-center">
				<p class="lead">At this time our we have no upcoming Free Style Tours.</p>
				<p>However we have several different types of tours to offer the visitor to Nova Scotia, New Brunswick and PEI.</p>	
			</div>
			<div class="col-md-3">
				
			</div>
		 </div>
		</div>
	</div>
	  
    <div id="Container" class="container tours">
	<div class="hidden-xs hidden-sm">
		<div class="well">
			<h3>Click a button below to filter the tours based on interests.</h3>
			<ul class="filters">
				<li class="filter mini btn btn-lg btn-primary" data-filter=".all">All</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".new">New</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".bayoffundy">Bay of Fundy</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".capebreton">Cape Breton</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".lunenburg">Lunenburg</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".maritimes">Maritimes</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".novascotia">Nova Scotia</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".pei">Prince Edward Island</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".culture">Culture</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".culinary">Culinary</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".design">Design your own</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".family">Family Fun</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".history">History</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".music">Music</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".outdoors">Outdoors</li>
				<li class="filter mini btn btn-lg btn-primary" data-filter=".wine">Wine</li>
			</ul>
		</div>
	</div>
	<div class="visible-xs visible-sm">
		<p>
			<a class="btn btn-large btn-info" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Fliters
			</a>
		</p>
		<div class="collapse" id="collapseExample">
		  <div class="well">
			<h3>Click a button below to filter the tours based on interests.</h3>
			<ul class="filters">
				<li class="filter mini btn btn-primary" data-filter=".all">All</li>
				<li class="filter mini btn btn-primary" data-filter=".new">New</li>
				<li class="filter mini btn btn-primary" data-filter=".bayoffundy">Bay of Fundy</li>
				<li class="filter mini btn btn-primary" data-filter=".capebreton">Cape Breton</li>
				<li class="filter mini btn btn-primary" data-filter=".lunenburg">Lunenburg</li>
				<li class="filter mini btn btn-primary" data-filter=".maritimes">Maritimes</li>
				<li class="filter mini btn btn-primary" data-filter=".novascotia">Nova Scotia</li>
				<li class="filter mini btn btn-primary" data-filter=".pei">Prince Edward Island</li>
				<li class="filter mini btn btn-primary" data-filter=".culture">Culture</li>
				<li class="filter mini btn btn-primary" data-filter=".culinary">Culinary</li>
				<li class="filter mini btn btn-primary" data-filter=".design">Design your own</li>
				<li class="filter mini btn btn-primary" data-filter=".family">Family Fun</li>
				<li class="filter mini btn btn-primary" data-filter=".history">History</li>
				<li class="filter mini btn btn-primary" data-filter=".music">Music</li>
				<li class="filter mini btn btn-primary" data-filter=".outdoors">Outdoors</li>
				<li class="filter mini btn btn-primary" data-filter=".wine">Wine</li>
			</ul>
		  </div>
		</div>
	</div>
	
	
	
		<div class="row">
			<?php include('../includes/tours.php');?>
		</div>
    </div>
<div class="container-fluid footer" role="top">
		<div class="container" role="top">
			  <div class="row">
			  
			  </div>
		</div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/banner.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js" defer></script>
	
	<script>
		$(document).ready(function(){

		// Start MixItUp:
			$('#Container').mixItUp({
				layout: {
					display: 'inline-block'
				}
			});
		});
	</script>
  </body>
</html>
