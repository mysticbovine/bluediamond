<?php
    $vsp_ursl       = get_option('siteurl');
    $vsp_sitename   = strtolower(get_option('blogname'));
    $vsp_site_tag   = strtolower($opt['site_keyword']);
    $vsp_site_desk  = strtolower($opt['hp_description']);
    $vsp_site_desk  = str_replace(array("\r", "\r\n", "\n"), ' ', $vsp_site_desk);
    $vsp_site_kwd   = strtolower($opt['hp_keywords']);
    $vsp_site_kwd   = str_replace(array("\r", "\r\n", "\n"), ' ', $vsp_site_kwd);

    $res = array();

    if ($opt['site_keyword']=='') { // If main keyword is set
      echo '<p style="color:green;">'.__("You need to set your website main keyword in order to be analyzed. You should add a homepage description and keywords containing your main keyword.").'</p>';
      echo '<p>'.__("Please <a href=\"http://www.vibethemes.com/contact/\" target=\"_blank\">let us know</a> about any other features you would like to have on Vibe SEO Pack.").'</p>';
    } else {

    // Check if keyword exist in site title
    $hptitle = preg_match_all("/.*$vsp_site_tag.*/i",$vsp_sitename,$res);
    if ( $hptitle > 0 ) {
        echo '<p class="vsp-ok">'.__("Found site title containing main keyword" ).'</p>'; $hptitlescore = 0.1;
    } else {
        echo '<p class="vsp-bad">'.__("Site title not containing main keyword" ).'</p>';
    }

    // Check if keyword exist in homepage description
    $hpdesc = preg_match_all("/.*$vsp_site_tag.*/i",$vsp_site_desk,$res);
    if ( $hpdesc > 0 ) {
        echo '<p class="vsp-ok">'.__("Found HP description containing main keyword" ).'</p>'; $hpdescscore = 0.1;
    } else {
        echo '<p class="vsp-bad">'.__("HP description not containing main keyword" ).'</p>';
    }

    // Check if keyword exist in homepage keywords
    $hpkwd = preg_match_all("/.*$vsp_site_tag.*/i",$vsp_site_kwd,$res);
    if ( $hpkwd > 0 ) {
        echo '<p class="vsp-ok">'.__("Found HP keywords containing main keyword" ).'</p>'; $hpkwdscore = 0.1;
    } else {
        echo '<p class="vsp-bad">'.__("HP keywords not containing main keyword" ).'</p>';
    }

    $sitemap = '../sitemap.xml';
    if (!file_exists($sitemap)) {
        echo '<p class="vsp-bad">'.__("No sitemap found! You should <a href=\"plugin-install.php?tab=search&type=term&s=Google+XML+Sitemaps&plugin-search-input=Search+Plugins\">add a sitemap</a>." ).'</p>'; $sitemapscore = -0.1;
    }

    // Check if peralink structure is SEO friendly
    if ( (get_option('permalink_structure') == '') || (get_option('permalink_structure') == '/archives/%post_id%') ) {
        echo '<p class="vsp-bad">'.__("The <a href=\"options-permalink.php\">permalink structure</a> should be changed!" ).'</p>';
    } else {
        echo '<p class="vsp-ok">'.__("Permalink structure OK" ).'</p>'; $permascore = 0.1;
    }

    } // End SEO Audit
?>