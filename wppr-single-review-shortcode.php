<?php   
#     /* 
#     Plugin Name: WPPR Single Review Shortcode
#     Plugin URI: https://themeisle.com/plugins/WPPR-Single-Review-Shortcode/
#     Description: Using the P_REVIEW shortcode display the review box where you want, in the post/page that you want as well as displaying multiple review boxes.
#     Author: Themeisle
#     Version: 1.0.6
#     Author URI: https://themeisle.com
#	  Text Domain: cwppos
#	  Domain Path: /languages
#     */  

define("WPPR_SRS_PATH", realpath(dirname(__FILE__)));
define("WPPR_SRS_VERSION", "1.0.6");

function wppr_srs_cwp_get_rating( $atts ) {
		$a = shortcode_atts( array(
			'visual' => 'no',
			'post_id' =>''
		), $atts );

        return cwppos_show_review($a['post_id'], $a['visual']);
}

if (!shortcode_exists('P_REVIEW' )) {
	add_shortcode( 'P_REVIEW', 'wppr_srs_cwp_get_rating');
}


// Added by Ash/Upwork
function wppr_srs_load_dependencies(){
    require_once WPPR_SRS_PATH . "/lib/dependencies/tgm-activation.php";
}
add_action('plugins_loaded', 'wppr_srs_load_dependencies');
// Added by Ash/Upwork
