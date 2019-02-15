<?php
	/* -- Randomly display hero image -- */
	## random number between 1 and 17
	$imagenumber = rand(1,17);
	if (!isset($pagetitle)) {$pagetitle = NULL;}
	if (!isset($subtitle)) {$subtitle = NULL;}
	
	echo "<div class='hero'>
	<div class=\"container\">
	<h1 class=\"page-title\">$pagetitle
	<span class=\"welcome\"> <span class=\"hidden-xs\">$subtitle</span></span></h1>
	</div>
	<img src='/images/sliders/b$imagenumber.jpg' class='img-responsive' alt=''>
	</div>";
?>