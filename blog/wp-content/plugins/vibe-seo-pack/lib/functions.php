<?php
// Add Vibe SEO Pack tags to the theme head
function vsp_theme_head() { global $post; $opt = get_option('vsp_options');


// Get the Post Tags and display them as keywords
function vsp_tags() {
    $posttags = get_the_tags();
    $tagstr = '';
    if ($posttags) {
    foreach($posttags as $tag) {
      $tagstr .= $tag->name . ', ';
      }
    $tagstr = substr($tagstr , 0, -2);
    return $tagstr;
    }
}

// get the first 160 chars of the content
if (have_posts()) : while (have_posts()) : the_post();
$descripion = get_the_excerpt();
$descripion = strip_tags($descripion);
$descripion = str_replace(array("\r", "\r\n", "\n"), '', $descripion);
$descripion = substr( $descripion,0,160 );
$descripion = substr( $descripion,0,-(strlen(strrchr($descripion,' '))) );
endwhile; endif;
// get the custom description
$customdesc = get_post_meta($post->ID, 'vsp_description', true);
$customdesc = str_replace(array("\r", "\r\n", "\n"), ' ', $customdesc);
// get the homepage description
$home_desc = $opt['hp_description'];
$home_desc = str_replace(array("\r", "\r\n", "\n"), ' ', $home_desc);
// get the homepage kewords
$home_tags = $opt['hp_keywords'];
$home_tags = str_replace(array("\r", "\r\n", "\n"), ' ', $home_tags);
// header script
$header_script = $opt['header_script'];

echo "\n<!-- Vibe SEO Pack Start Here -->\n";

if ( is_front_page() ) { // If is frontpage

  // display the description meta tag
  if ( $home_desc ) {
    echo "  <meta name=\"description\" content=\"".$home_desc."\" />\n";
  } else {
    echo "  <meta name=\"description\" content=\"".get_option('blogdescription')."\" />\n";
  }
  // display keywords meta tag
  if ($home_tags) {
    echo "  <meta name=\"keywords\" content=\"".$home_tags."\" />\n";
  } else {
    echo "  <meta name=\"keywords\" content=\"".get_option('blogname')."\" />\n";
  }

} elseif ( is_single() || is_page() ) { // If is single post

  // display the description meta tag
  if ( $customdesc ) {
    echo "  <meta name=\"description\" content=\"".$customdesc."\" />\n";
  } else {
    echo "  <meta name=\"description\" content=\"".$descripion."\" />\n";
  }
  // display keywords meta tag
  if (get_the_tags()) {
    echo "  <meta name=\"keywords\" content=\"".vsp_tags()."\" />\n";
  }

}


// Add NoIndex Meta Tag to Category page
if (is_category()) {
    if ( $opt['category_index'] == 'index' ) {
        echo "  <meta name=\"robots\" content=\"index, follow\">\n";
    } else {
        echo "  <meta name=\"robots\" content=\"noindex, follow\"/>\n";
    }
}

// Add NoIndex Meta Tag to Archive page
if(is_date()){
    if ( $opt['archive_index'] == 'index' ) {
        echo "  <meta name=\"robots\" content=\"index, follow\">\n";
    } else {
        echo "  <meta name=\"robots\" content=\"noindex, follow\"/>\n";
    }
}

// Add NoIndex Meta Tag to Search page
if(is_search()){
    if ( $opt['search_index'] == 'index' ) {
        echo "  <meta name=\"robots\" content=\"index, follow\">\n";
    } else {
        echo "  <meta name=\"robots\" content=\"noindex, follow\"/>\n";
    }
}

// Add NoIndex Meta Tag to Tag page
if(is_tag()){
    if ( $opt['tag_index'] == 'index' ) {
        echo "  <meta name=\"robots\" content=\"index, follow\">\n";
    } else {
        echo "  <meta name=\"robots\" content=\"noindex, follow\"/>\n";
    }
}

// Add NoIndex Meta Tag to Author page
if(is_author()){
    if ( $opt['author_index'] == 'index' ) {
        echo "  <meta name=\"robots\" content=\"index, follow\">\n";
    } else {
        echo "  <meta name=\"robots\" content=\"noindex, follow\"/>\n";
    }
}

// Add NoIndex Tag to Selected Static Pages
$noindex_pages = explode(",", $opt['page_index']);
if(is_page($noindex_pages)){
    echo "  <meta name=\"robots\" content=\"noindex, follow\" />\n";
}

// Add header scripts
if ($header_script) {
  echo "  ".$header_script."\n";
}

echo "<!-- Vibe SEO Pack Ends Here -->\n\n";
}
add_action('wp_head', 'vsp_theme_head');

// Aplly custom titles if set
function vsp_custom_title() { $opt = get_option('vsp_options'); global $post, $paged;
    if ( is_single() || is_page() ) {
        if (get_post_meta($post->ID, 'vsp_title', true)) { // If Custom Title is used
	        return get_post_meta($post->ID, 'vsp_title', true).' | ';
        } else {
            return strip_tags( apply_filters( 'single_post_title', $post->post_title ) ).' | ';
        }
	    if ( $paged > 1 ) {
	         echo ' - page '. $paged;
        }
	}
}
add_action('wp_title', 'vsp_custom_title', 1, 1);

// Add nofollow attribute to Category Links
function vsp_nofollow_categories( $text ) { $opt = get_option('vsp_options');
	if ( $opt['category_nofollow'] == 'nofollow' ) {
		$text = stripslashes($text);
		$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
		return $text;
	} else {
		return $text;
	}
}
add_filter('wp_list_categories', 'vsp_nofollow_categories');

// Add nofollow attribute to Page Links
function vsp_nofollow_pages( $text ) { $opt = get_option('vsp_options');
	if ( $opt['page_nofollow'] == 'nofollow' ) {
		$text = stripslashes($text);
		$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
		return $text;
	} else {
		return $text;
	}
}
add_filter('wp_list_pages', 'vsp_nofollow_pages');

// Add nofollow attribute to Archive Links
function vsp_nofollow_archives( $text ) { $opt = get_option('vsp_options');
	if ( $opt['archive_nofollow'] == 'nofollow' ) {
		$text = stripslashes($text);
		$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
		return $text;
	} else {
		return $text;
	}
}
add_filter('get_archives_link', 'vsp_nofollow_archives');

// Add nofollow attribute to Register Link
function vsp_nofollow_register( $text ) { $opt = get_option('vsp_options');
	if ( $opt['register_nofollow'] == 'nofollow' ) {
		$text = stripslashes($text);
		$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
		return $text;
	} else {
		return $text;
	}
}
add_filter('register', 'vsp_nofollow_register');

// Add nofollow attribute to Login Link
function vsp_nofollow_login( $text ) { $opt = get_option('vsp_options');
	if ( $opt['login_nofollow'] == 'nofollow' ) {
		$text = stripslashes($text);
		$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
		return $text;
	} else {
		return $text;
	}
}
add_filter('loginout', 'vsp_nofollow_login');

// Add footer scripts
function vsp_footer_script() { $opt = get_option('vsp_options');
      echo $opt['footer_script']."\n";
    if ($opt['footer_link']=='link') {
      echo "<a id=\"vibelink\" href=\"http://www.vibethemes.com/\" target=\"_blank\" title=\"wordpress seo\">WordPress SEO</a>\n";
    }
}
add_action('wp_footer', 'vsp_footer_script');