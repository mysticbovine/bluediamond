<?php 
// Program to display URL of current page. 
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $referring_page = "https"; 
else
    $referring_page = "http"; 
  
// Here append the common URL characters. 
$referring_page .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$referring_page .= $_SERVER['HTTP_HOST']; 
  
// Append the requested resource location to the URL 
$referring_page .= $_SERVER['REQUEST_URI']; 
      
// Print the link 

?> 
<h2>Interested in this trip?</h2>
<p><a type="button" class="btn btn-lg btn-warning" href="/contact.php?referring_page=<?php echo $referring_page; ?>">Contact us today!</a></p>
<p class="french">Nous offrons maintenant des visites en fran&ccedil;ais.</p>
<p class="spanish">Ahora ofrecemos tours en espa&ntilde;ol.</p>
