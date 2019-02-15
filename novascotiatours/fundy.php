<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="A tour of the fabled Bay of Fundy, known for its high tidal range, is located between the Provinces of Nova Scotia and New Brunswick.">
	<meta name="keywords" content="Blue Diamond Tours, group tours, Bay of Fundy, Nova Scotia, Halifax, New Brunswick, Moncton, Hopewell rocks, tides, flowepots">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Rob Evans alacarde.ca">
    <link rel="icon" href="../favicon.ico">

    <title>Bay of Fundy Sightseeing tours | Blue Diamond Tours | Halifax Tours and Sightseeing | Nova Scotia</title>

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
	<link href="../../css/lightbox.css" rel="stylesheet">
    <link href="../../css/btd2015.css" rel="stylesheet">
	
	
	

  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<!-- Fixed navbar -->
	
	<?php 
	global $page;
	$page = "tours";
	include('../includes/nav.php');
	#include('../includes/slider.php'); ?>
	
	<div class="hero">
		<div class="item">
			<img src="../../images/sliders/b11.jpg" alt="Bay of Fundy" class="img-responsive">
		</div>
	</div>
	<div class="container-fluid intro" role="top">
		<div class="container" role="top">
		  <div class="row">
			<div class="col-md-3">
				<h1>Bay of Fundy Sightseeing tours</h1>
			</div>
			<div class="col-md-6">
				<p class="lead">The fabled Bay of Fundy, known for its high tidal range, is located between  the Provinces of Nova Scotia and New Brunswick.</p>
				<p>Our small group bus  and coach tours are a great way to discover all this wonder of nature has to  offer!</p>	
			</div>
			<div class="col-md-3">
				
			</div>
		  </div>
		</div>
	</div>
    <div class="container theme-showcase" role="main">

		<div class="row quote">
			<article class="col-md-12">
				<div class="wrap">
					<div class="row">
					
						<form id="form1" name="form1" method="post" action="sam.php">
							<div class="col-md-8">
								<h2>The Bay of Fundy Waters: How Mighty</h2>
								<p>The bay&rsquo;s extreme tidal range, <strong>54.8 feet</strong>, causes interesting phenomena in the various rivers that empty into it;</p>
								<ul type="disc">
								  <li>Saint John River &amp; it&rsquo;s Reversing Falls</li>
								  <li>the Tidal Bore, Shubenacadie River, where can ride the incoming tide on a &ldquo;raft&rdquo;!</li>
								  <li>and other river systems as well and more</li>
								  <li>twice daily over <strong>100 billion tons </strong>of water moves in and out of the bay</li>
								  <li>these waters exceed the amount of all the water in all the rivers of the world</li>
								  <li>sheer weight of tide flowing into Minis Basin, causes Nova Scotia to <strong>tilt ! </strong></li>
								</ul>
								<h2>The Bay of Fundy Tidal Action</h2>
								<ul type="disc">
								  <li>each phase of tidal cycle is 6 hours, 13 minutes - average tide range 45.5 feet</li>
								  <li>tide times move ahead one hour per day</li>
								  <li><strong>highest tide 54.8 feet</strong>, Burntcoat Head, Hants County, Nova Scotia - on Minas Basin </li>
								</ul>
								<h2>Gallery</h2>
								<div id="gallery">
									<div class="row">
									<?php
										$loop = 21;
										$i = 1;
										$photonumber = 'fundy';
										$folder = 'fundy';
										$title = 'Bay of Fundy';
										$photodescription = array( 1 => 
											"Medford Beach, the &acute;Key Hole&acute;. Photo by Terri McCulloc.",
											"Morden wharf in Kings County. Photo by Terri McCulloc.",
											"Morden wharf in Kings County. Photo by Terri McCulloc.",
											"Ocean floor Five Islands. Photo by Terri McCulloc.",
											"Fish weir Minas Basin near Parrsboro. Photo by Terri McCulloc.",
											"Low tide Scots Bay. Photo by Terri McCulloc.",
											"Spencer&acute;s Island sunset (near Advocate). Photo by Terri McCulloc.",
											"Low tide Hampton Wharf. Photo by Terri McCulloc.",
											"Annappolis Royal wharf high tide. Photo by Theresa Bunbury.",
											"Annappolis Royal wharf low tide. Photo by Theresa Bunbury.",
											"Two islands at low tide. Photo by Terri McCulloc.",
											"Cape d&acute;Or (Cumberland Co). Photo by Terri McCulloc.",
											"Clamming in Minas Basin. Photo by Theresa Bunbury.",
											"Medford Beach sandstone, low tide.  Photo by Terri McCulloc.",
											"French Cross. Photo by Terri McCulloc",
											"Halls Harbour - low tide. Photo by Terri McCulloc.",
											"Halls Harbour - low tide. Photo by Terri McCulloc.",
											"Joggins Fossil Cliffs,low tide, fog rolls in. Photo by Terri McCulloc.",
											"Parrsboro Harbour high tide. Photo by Terri McCulloc.",
											"Parrsboro Harbour low tide. Photo by Terri McCulloc.",
											"Medford Beach sandstone, low tide.  Photo by Terri McCulloc.",
										);
										while ($i <= $loop) {
											echo"<div class='col-md-4'>
													<a href='/images/$folder/".$photonumber.$i.".jpg' rel='lightbox[".$title."]' title='".$photodescription[$i]."'>
														<img src=\"/images/$folder/".$photonumber.$i.".jpg\" alt=\"Click to View\"  border=\"0\" class=\"img-responsive img-thumbnail\"/>
													</a>
												</div>";
											$i++;
										}
									?>
									</div>
								</div>
								<h2>Ready to  explore?</h2>
								<p>We will help you tour, travel in and around, and on the Bay of Fundy.&nbsp;  Explore this wonder of the world, go nature and whale watching, travel by ferry  to remote Fundy Inlands, cross the Bay from Digby to Saint John, walk on the  seabed which will soon be covered by Fundy&rsquo;s Tides, travel out to the  headlands, discover dinosaur fossils, gems stones and much more!<br />
								</p>
								<h2>Just tell us...</h2>
								<ul>
								  <li> how many days (minimum is<strong> two and a half </strong>but <strong>no  maximum</strong>)</li>
								  <li> your interests so we can develop where we go, what we see, what we do,  for each day</li>
								  <li> who is going; Just you and your group? Or&nbsp;Open to others? (a great  way to meet new people). Remember minimum for a small group bus tour is four -  the maximum is six </li>
								  <li> the start and ending dates of this journey</li>
								</ul>
								<p style="margin-bottom: 0;">Blue  Diamond will take your instructions and develop a journey that incorporates all  the elements you want, thus creating <em>your  tour your way!</em></p>
							</div>
										
						</form>
						<div class="col-md-4">
							<div class="boxshadow">
								<p class="lead ">Thank you for the wonderful trip and all the wonderful things you did for us. It was and will be a treasured memory.</p>    

								<p><strong>Margaret & Joe Patterson<br /> Dartmouth, NS</strong></p> 
							</div>
							<?php include('../includes/interested.php');?>
						</div>
					</div>
				</div>
			</article>
			

		</div>
	</div>
	 <!-- /container -->
<?php include('../includes/footer.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../js/prototype.js"></script>
	<script src="../js/scriptaculous.js?load=effects,builder"></script> 
	<script src="../js/lightbox.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
