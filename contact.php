<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Contact Blue Diamond Tours for group and motorcoach tours of Nova Scotia and beyond, including Halifax, Cape Breton, Peggy's Cove, Lunenburg.">
    <meta name="keywords" content="Blue Diamond Tours, group tour, Peggys Cove, Luneburg, Nova Scotia, Halifax, Cape Breton, senior groups, senior clubs, private groups, group travel, conventions, tour guide, ">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Rob Evans alacarde.ca">
    <link rel="icon" href="../favicon.ico">

    <title>Contact | Blue Diamond Tours | Halifax Tours and Sightseeing | Nova Scotia</title>

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
	global $pagetitle;
	global $subtitle;
	$pagetitle = "Contact us";
	$subtitle = "Customized Tours of Canada's Maritime Provinces";
	$page = "contact";
	include('includes/nav.php');
	include('includes/slider.php'); ?>
 
	  <div class="container-fluid intro" role="top">
		<div class="container" role="top">
			  <div class="row">
				
				<div class="col-md-9 col-md-offset-1 text-center">
					<p class="lead">Your questions, comments and request for quotes are always welcome.</p>
					<p>There are many ways to contact Blue Diamond Tours, please feel free to contact us today.</p>	
					<p><b>Please note:<b/> we do not offer scheduled bus tours - only on demaand private tours.</p>	
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
							<div class="col-md-8"><h1>Contact form</h1>
								<div class="row">
									<div class="col-md-6">											
										<p><label for="name"><strong>Full Name:</strong></label> <input type="text" name="name" id="name" placeholder="Your full name" class="required"/></p>
										<p><label for="phone"><strong>Phone Number:</strong></label> <input name="phone" type="phone" id="phone" size="13" maxlength="13" placeholder="X-(XXX)-XXX-XXXX"/></p>
										<p><label for="email"><strong>Email:</strong></label> <input type="email" name="email" id="email" placeholder="name@email.com" class="required"/></p>
										<p>Would you like to be added to our mailing list? </label><br />
										<label for="yes"><input name="list" type="radio" id="yes" value="YES" checked="checked" />Yes  </label>
										<label for="no"><input name="list" type="radio"  id="no" value="NO" />No </label>
										</p>
										
										<div style="display:none;">
										  <input name="b2w1" type="text" id="b2w1" value="Kp1zxz9w5DHW" />
										  <input type="text" name="b2w2" id="b2w2" value=""/>
										</div>
																		
									</div>
									<div class="col-md-6">
										<p><label for="message"><strong>Your message or your dream tour details:</strong></label><br />
										<textarea name="message" rows="10" id="message" class="required"></textarea></p>
									</div>	
									<div class="col-md-12">
										<p>
											<input type="submit" name="Submit" value="Submit" class="btn btn-primary" />
											<input name="recipients" type="hidden" id="recipients" value="info_*_bluediamondtours.com" /> 
											<!-- <input name="recipients" type="hidden" id="recipients" value="mysticbovine_*_gmail.com" />-->
			
											<input name="good_url" type="hidden" id="good_url" value="good.php" />
											<input name="subject" type="hidden" id="subject" value="Message from the website" />
										</p>
									</div>
								</div>
							</div>
										
						</form>
						<div class="col-md-4">
							<h1>Other ways to contact us</h1>
							<p><strong>Toll Free:</strong> <a href="tel:18664146883">1-866-414-6883</a></p>
							<p><strong>Local:</strong> <a href="tel:19024446883">902-444-6883</a></p>
							<p><strong>Fax:</strong> <a href="tel:19024453311">902-445-3311</a></p>
							<p><strong>E-mail:</strong> <a title="mailto:info@bluediamondtours.com" href="mailto:info@bluediamondtours.com">info@bluediamondtours.com</a></p>
						</div>
					</div>
				</div>
			</article>
			

		</div>
	</div>
	 <!-- /container -->
<?php include('includes/footer.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/banner.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
	<script>
		// Validate.js settings.
		$(document).ready(function(){		
			$("#form1").validate({
				rules: {
					name:    { required: true },
					message: { required: true },
					email:   { required: true }
				},
				messages: {
					name:    { required: "Please tell us your name"	},
					message: { required: "Please tell us what you would like to know"	},
					email:   { required: "Please enter your email address"	}
				},
				highlight: function(element, errorClass){
					$(element).css("background","yellow").delay(3000).queue( function(next){ 
						$(this).css("background","white"); 
						next(); 
					  });
					
				},
			});						
		});
	</script>
  </body>
</html>
