<?php
//A simple function to get data stored in a custom field
if(!function_exists('get_custom_field')) {
function get_custom_field($field) {
	global $post;
	$custom_field = get_post_meta($post->ID, $field, true);
	echo $custom_field;
}
}

// Adds a custom section to the "advanced" Post and Page edit screens
function vsp_add_custom_box() {
	if( function_exists( 'add_meta_box' )) {
		add_meta_box( 'vsp_custom_box_1', __( 'Vibe SEO Pack Panel' ), 'vsp_inner_custom_box_1', 'post', 'normal', 'high' );
		add_meta_box( 'vsp_custom_box_1', __( 'Vibe SEO Pack Panel' ), 'vsp_inner_custom_box_1', 'page', 'normal', 'high' );
	}
}

/* Prints the inner fields for the custom post/page section */
function vsp_inner_custom_box_1() {
	global $post;

	// Use nonce for verification ... ONLY USE ONCE!
	echo '<input type="hidden" name="vsp_noncename" id="vsp_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	echo '<div id="seo-box-right">';

    include_once('post-audit.php'); // Include post audit functions file

	echo '</div>';

    if ((isset($_GET['action'])) && ($_GET['action']='edit')) { $updatebut = '<input name="save" type="submit" class="button" id="publish" accesskey="p" value="Update" />'; }
	echo '<div id="seo-box-left">';
	echo '<p><label for="vsp_keyword"><b>'. __("Main Keyword") .'</b>:</label> ';
	echo '<input type="text" name="vsp_keyword" value="'. get_post_meta($post->ID, 'vsp_keyword', true) .'" /> '.$updatebut.'</p>';

    // If main keyword is set, show the score
    if ( get_post_meta($post->ID, 'vsp_keyword', true) ) {
        if ( $score < 60 ) {
            echo '<p><span style="color:red;font-size:14px;font-weight:bold;">'.__("Overall Post SEO score" ).': '.$score.'%</span></p>';
        } else {
            echo '<p><span style="color:green;font-size:14px;font-weight:bold;">'.__("Overall Post SEO score" ).': '.$score.'%</span></p>';
        }
    }

    echo '<p><label for="vsp_description">' . __("Enter custom <b>title</b>" ) . ': </label>';
	echo '<textarea name="vsp_title" maxlength="70" style="width:100%;height:26px;" >'.get_post_meta($post->ID, 'vsp_title', true).'</textarea></p>';
	echo '<p><label for="vsp_description">' . __("Enter custom <b>description</b>" ) . ': </label>';
	echo '<textarea name="vsp_description" maxlength="160" lengthcut="true" style="width:100%;" >'.get_post_meta($post->ID, 'vsp_description', true).'</textarea></p>';
	echo '<p><b>Search</b>: <a href="http://search.twitter.com/search?q='.$kwd.'" target="_blank">Twitter</a> | <a href="http://www.google.com/search?hl=en&q='.$kwd.'" target="_blank">Google</a> | <a href="http://www.google.com/search?hl=en&q=[%22'.$kwd.'%22+%22powered+by+wordpress%22]" target="_blank">WP blogs</a> | <a href="http://en.wikipedia.org/w/index.php?title=Special%3ASearch&redirs=1&search='.$kwd.'&fulltext=Search&ns0=1" target="_blank">Wiki</a> | <a style="color:black;" href="http://www.vibethemes.com/wordppress-seo-get-in-touch-with-people/" target="_blank">what\'s this?</a></p>';
	echo '<script type="text/javascript" src="'.WP_CONTENT_URL.'/plugins/vibe-seo-pack/lib/js/charcount.js"></script></div>';

	echo '<div style="clear:both;"></div>';

}

/* When the post is saved, saves our custom data */
function vsp_save_postdata($post_id, $post) {

	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['vsp_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post->ID ))
		return $post->ID;
	} else {
		if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;
	}

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$mydata['vsp_keyword'] = $_POST['vsp_keyword'];
	$mydata['vsp_title'] = $_POST['vsp_title'];
	$mydata['vsp_description'] = $_POST['vsp_description'];

	// Add values of $mydata as custom fields

	foreach ($mydata as $key => $value) { //Let's cycle through the $mydata array!
		if( $post->post_type == 'revision' ) return; //don't store custom data twice
		$value = implode(',', (array)$value); //if $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { //if the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { //if the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); //delete if blank
	}

}

/* Use the admin_menu action to define the custom boxes */
add_action('admin_menu', 'vsp_add_custom_box');

/* Use the save_post action to do something with the data entered */
add_action('save_post', 'vsp_save_postdata', 1, 2); // save the custom field