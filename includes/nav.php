<nav class="navbar navbar-inverse navbar-fixed-top upper">
		<div class="container">
			<div class="row header-widgets">
				<div class="col-xs-6 hidden-md hidden-sm hidden-xs no-mobile">
					<div class="slogan no-mobile">Private tours of Nova Scotia, New Brunswick and Prince Edward Island</div>
				</div>
				<div class="col-lg-6 col-sm-12 text-right no-mobile">
					<div class="header_email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@bluediamondtours.com">info@bluediamondtours.com</a></div>
					<div class="header_phone"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <a href="tel:18664146883">1-866-414-6883</a></div>
					<div class="header_facebook"><a href="https://www.facebook.com/Blue-Diamond-Tours-552653304841832" target=_blank><img src="../../images/facebook.png" alt="Like us on Facebook"></a></div>
					<div class="header_twitter"><a href="https://twitter.com/NovaScotiaTours" target=_blank><img src="../../images/twitter.png" alt="Follow us on Twitter"></a></div>
				</div>
			</div>
			
			
			
		</div>
	</nav>
    <nav class="navbar navbar-inverse navbar-fixed-top lower">
      <div class="container">
		
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php">Blue Diamond Tours: Private tours of Noava Scotia, New Brunswick and Prince Edward Island</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			
          <ul class="nav navbar-nav">
            <li <?php if ($page == "home") { print " class='active'"; }?>><a href="/index.php">Home</a></li>
            <li class="dropdown<?php if ($page == "tours") { print " active"; }?>">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Private Tours <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/novascotiatours/bayoffundy/guidedtours.php">Bay of Fundy</a></li>
					<li><a href="/novascotiatours/capebreton/guidedtours.php">Cape Breton</a></li>
					<li><a href="/novascotiatours/halifax/guidedtours.php">Halifax</a></li>
					<li><a href="/novascotiatours/maritimes/guidedtours.php">Maritimes</a></li>
					<li><a href="/novascotiatours/novascotia/guidedtours.php">Nova Scotia</a></li>
					<li><a href="/novascotiatours/princeedwardisland/guidedtours.php">Prince Edward Island</a></li>
					<li class="hidden"><a href="/novascotiatours/bustours.php">What are On Demand Private Tours?</a></li>
				</ul>

				</li>		
                     
            <li <?php if ($page == "blog") { print " class='active'"; }?>><a href="/blog">Hidden Treasures Blog</a></li>   
			<li <?php if ($page == "testimonials") { print " class='active'"; }?>><a href="/testimonials.php">Testimonials</a></li> 			
            <li class="dropdown <?php if ($page == "about") { print " active"; }?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/about.php">About</a></li>
                <li><a href="/links.php">Other Sites</a></li>
                
              </ul>
            </li>
			
			<li <?php if ($page == "contact") { print " class='active'"; }?>><a href="/contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>