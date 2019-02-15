<?php
// If the main keyword is set
if ( get_post_meta($post->ID, 'vsp_keyword', true) ) {

    $url            = get_bloginfo('wpurl');
    $strfilter      = apply_filters('the_content', $post->post_content);
    $strfilter      = strtolower($strfilter);
    $titlefilter    = apply_filters('the_title', $post->post_title);
    $titlefilter    = strtolower($titlefilter);

    $vsp_content    = strip_tags($post->post_content);
    $vsp_content    = strtolower($vsp_content);
    $vsp_words      = str_word_count(strtolower($vsp_content),1);
    $vsp_word_count = count($vsp_words);

    $res            = array();
    $kwd            = strtolower(get_post_meta($post->ID, 'vsp_keyword', true));
    $kwd_count      = preg_match_all("/\b$kwd\b/msiU", $vsp_content, $res);

    $kwd_density    = ($kwd_count / $vsp_word_count) * 100;
    $kwdper         = number_format($kwd_density,2);

// Check keyword density
    if ( $kwdper < 1 ) {
        echo '<p class="vsp-bad">'.__("Keyword Density" ).': '.$kwdper.'% - <strong>'.__("is too low!" ).'</strong></p>';
      } elseif ( $kwdper > 5.5 ) {
        echo '<p class="vsp-bad">'.__("Keyword Density" ).': '.$kwdper.'% - <strong>'.__("is too high!" ).'</strong></p>';
      } else {
        echo '<p class="vsp-ok">'.__("Keyword Density" ).': '.$kwdper.'%</p>';
      }
      // SEO score based on the keyword density
      if ($kwdper>=1 && $kwdper<=1.5) { $densityscore = 0.25; }
      if ($kwdper>1.5 && $kwdper<=2) { $densityscore = 0.27; }
      if ($kwdper>2 && $kwdper<=2.5) { $densityscore = 0.29; }
      if ($kwdper>2.5 && $kwdper<=3) { $densityscore = 0.31; }
      if ($kwdper>3 && $kwdper<=3.5) { $densityscore = 0.33; }
      if ($kwdper>3.5 && $kwdper<=4) { $densityscore = 0.35; }
      if ($kwdper>4 && $kwdper<=4.5) { $densityscore = 0.37; }
      if ($kwdper>4.5 && $kwdper<=5) { $densityscore = 0.39; }
      if ($kwdper>5 && $kwdper<=5.5) { $densityscore = 0.4; }
      if ($kwdper>5.5 && $kwdper<=6) { $densityscore = 0.1; }

      // Check if keyword exist in the URL
      $urlkwd = preg_match_all("/.*$kwd.*/i",$url,$res);
      if ( $urlkwd > 0 ) {
        $urlscore = 0.03;
      }

      // Check if keyword exist in the title
      $customtitle = get_post_meta($post->ID, 'vsp_title', true);
      if ($customtitle) {
        $titlekwd = preg_match_all("/.*$kwd.*/i",$customtitle,$res);
      } else {
        $titlekwd = preg_match_all("/.*$kwd.*/i",$titlefilter,$res);
      }
      if ( $titlekwd > 0 ) {
        echo '<p class="vsp-ok">'.__("Found title containing main keyword" ).'</p>'; $titlescore = 0.12;
      } else {
        echo '<p class="vsp-bad">'.__("Title not containing main keyword" ).'</p>';
      }

      // Check if keyword exist in the custom description
      $customdesc = strtolower(get_post_meta($post->ID, 'vsp_description', true));
      if ($customdesc) {
        $customdesckwd = preg_match_all("/.*$kwd.*/i",$customdesc,$res);
        if ( $customdesckwd > 0 ) {} else {
          echo '<p class="vsp-bad">'.__("Description not containing main keyword" ).'</p>'; $descscore = -0.1;
        }
      }

      // Check if keyword exist in H1 tag
      $h1tags = preg_match_all("/(<h1.*>)(.*$kwd.*)(<\/h1>)/i",$strfilter,$res);
      if ( $h1tags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found H1 tag containing main keyword" ).'</p>'; $h1score = 0.1;
      } else {
        echo '<p class="vsp-bad">'.__("No \"H1\" tag containing main keyword" ).'</p>';
      }

      // Check if keyword exist in H2 tag
      $h2tags = preg_match_all("/(<h2.*>)(.*$kwd.*)(<\/h2>)/i",$strfilter,$res);
      if ( $h2tags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found H2 tag containing main keyword" ).'</p>'; $h2score = 0.08;
      } else {
        echo '<p class="vsp-bad">'.__("No \"H2\" tag containing main keyword" ).'</p>';
      }

      // Check if keyword exist in H3 tag
      $h3tags = preg_match_all("/(<h3.*>)(.*$kwd.*)(<\/h3>)/i",$strfilter,$res);
      if ( $h3tags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found H3 tag containing main keyword" ).'</p>'; $h3score = 0.04;
      } else {
        echo '<p class="vsp-bad">'.__("No \"H3\" tag containing main keyword" ).'</p>';
      }

      // Check if keyword exist in strong tag
      $bolddtags = preg_match_all("/(<strong.*>)(.*$kwd.*)(<\/strong>)/i",$strfilter,$res);
      if ( $bolddtags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found \"strong\" <b>(b)</b> tag containing main keyword" ).'</p>'; $boldscore = 0.03;
      } else {
        echo '<p class="vsp-bad">'.__("No \"strong\" <b>(b)</b> tag containing main keyword" ).'</p>';
      }

      // Check if keyword exist in italic tag
      $emdtags = preg_match_all("/(<em.*>)(.*$kwd.*)(<\/em>)/i",$strfilter,$res);
      if ( $emdtags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found \"em\" <i>(i)</i> tag containing main keyword" ).'</p>'; $emscore = 0.03;
      } else {
        echo '<p class="vsp-bad">'.__("No \"em\" <i>(i)</i> tag containing main keyword" ).'</p>';
      }

      // Check if keyword exist in alt image tag
      $imgtags = preg_match_all("/<img\s[^>]*alt=\".*$kwd.*\"[^>]*>/i",$strfilter,$res);
      if ( $imgtags > 0 ) {
        echo '<p class="vsp-ok">'.__("Found \"alt\" image tag containing main keyword" ).'</p>'; $imgscore = 0.05;
      } else {
        echo '<p class="vsp-bad">'.__("No \"alt\" image tag containing main keyword" ).'</p>';
      }

      // Check if internal link exist
      $int_url = str_replace('http://www.', '', $url);
      $int_url = str_replace('http://', '', $url);
      $int_url = str_replace('/', '\/', $url);
      $intlink = preg_match_all("/<.*href=\".*$int_url.*\"[^>]*>(.*)<\/a>/isxmU",$strfilter,$res);
      if ( $intlink > 0 ) {
        echo '<p class="vsp-ok">'.__("Found internal link" ).'</p>'; $linkscore = 0.02;
      } else {
        echo '<p class="vsp-bad">'.__("No internal link can be found" ).'</p>';
      }

      // count words
      if ( $vsp_word_count > 199 ) {
        $wcountscore = 0.1;
      } else {
        echo '<p class="vsp-bad">'.__("You should add more words to your content" ).'</p>';
      }

// Calculate the SEO rating score
$score = ( $densityscore + $urlscore + $titlescore + $h1score + $h2score + $h3score + $boldscore + $emscore + $imgscore + $linkscore + $wcountscore + $descscore ) * 100;

} else { // If keyword is not set

    $kwd = apply_filters('the_title', $post->post_title);
    echo '<p>'.__("Set your post main keyword and hit the <b>save draft</b> button if you are creating a new post, or the <b>update</b> button if you are editing a published post.  I will analyze your post content and title and will give you hints for what should be done for better search engine optimization. After optimizing your post you might want to use the search helpers on the left to get in touch with others interested by the same topic as you." ).'</p>';

}

?>