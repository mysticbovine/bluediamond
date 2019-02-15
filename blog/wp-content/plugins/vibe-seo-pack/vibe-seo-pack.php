<?php
/*
    Plugin Name: Vibe SEO Pack
    Plugin URI: http://www.vibethemes.com/wordpress-plugins/vibe-seo-pack-wordpress-plugin/
    Description: Vibe SEO Pack is a simple powerful and easy to use SEO tool to optimize your website for search engines without having to edit a single line of code. WordPress plugin by  <a href="http://www.vibethemes.com/" title="premium wordpress themes">VibeThemes</a>.
    Author: VibeThemes.com
    Version: 1.2
    Author URI: http://www.vibethemes.com

    Copyright 2009-2001  VibeThemes.com  (email : VibeThemes@gmail.com)

    License: GPL2
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// Set roles for access levels
$role_admin     = 'administrator';

// Define
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
}

// Set the default values
$defaults = array(
    'site_keyword'      => '',
    'hp_description'    => '',
    'hp_keywords'       => '',
    'footer_link'       => 'link',
    'header_script'     => '',
    'footer_script'     => '',
    'page_index'        => '',
    'category_index'    => 'index',
    'archive_index'     => 'noindex',
    'search_index'      => 'noindex',
    'tag_index'         => 'index',
    'author_index'      => 'noindex',
    'login_index'       => 'noindex',
    'admin_index'       => 'noindex',
    'category_nofollow' => 'follow',
    'page_nofollow'     => 'follow',
    'archive_nofollow'  => 'nofollow',
    'register_nofollow' => 'nofollow',
    'login_nofollow'    => 'nofollow'
);
add_option('vsp_options', $defaults, '', 'yes');

// Reset to default function
if (isset($_POST['reset-vsp'])) {
    update_option('vsp_options', $defaults);
    $msg = '<div class="updated fade" id="message"><p><strong>Settings Reset to Default</strong></p></div>';
}
// Updated message
if ( isset($_GET['page']) && ($_GET['page']=='vsp-dashboard') && isset($_GET['settings-updated']) && ($_GET['settings-updated']=='true') ) {
    $msg = '<div class="updated fade" id="message"><p><strong>Settings Updated</strong></p></div>';
}

// Init plugin options to white list our options
add_action( 'admin_init', 'vibe_seo_pack_options_init' );
function vibe_seo_pack_options_init() {
    register_setting( 'vsp_settings', 'vsp_options');
}

// Create menu page(s)
function page_vsp_admin_options(){ global $role_admin;

    add_menu_page('Vibe SEO Pack', 'Vibe SEO Pack', $role_admin,  'vsp-dashboard' , 'vsp_dashboard', 'div');
	add_submenu_page('vsp-dashboard', 'Dashboard', 'Dashboard', $role_admin, 'vsp-dashboard', 'vsp_dashboard');
}
// Include admin pages
function vsp_dashboard()      {include_once('admin/vsp-dashboard.php');}

// Register the plugin menu into WP
add_action('admin_menu', 'page_vsp_admin_options');

// Load plugin CSS
wp_enqueue_style( 'vsp_style', plugins_url( $path = '/vibe-seo-pack/lib/style.css'), array() );

// Include plugin specific functions
include_once('lib/functions.php');

// Include meta box
include_once('lib/meta-box.php');

// Admin head scripts
function vsp_admin_head() { ?>
<script type="text/javascript">
    var $jq = jQuery.noConflict();
    $jq(document).ready(function() { $jq(".fade").fadeIn(1000).fadeTo(1000, 1).fadeOut(1000); });
</script>
<script type="text/javascript">
function showDonate(vspdonate) {
    if ( vspdonate.options[vspdonate.selectedIndex].value == "donate" ) {
        document.getElementById("vspdonatebox").style.display = "block";
        document.getElementById("nohelpbox").style.display = "none";
    } else if ( vspdonate.options[vspdonate.selectedIndex].value == "nohelp" ) {
        document.getElementById("vspdonatebox").style.display = "none";
        document.getElementById("nohelpbox").style.display = "block";
    } else {
        document.getElementById("nohelpbox").style.display = "none";
        document.getElementById("vspdonatebox").style.display = "none";
    }
}
</script>
<?php }
add_action('admin_head', 'vsp_admin_head');

?>