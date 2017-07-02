<?php
// Including Files
if (file_exists( dirname( __FILE__ ) . '/inc/cs-style-js.php' )) {
	require_once( get_template_directory() .'/inc/cs-style-js.php'  );
}

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/cs-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/cs-options.php' );
}

// Removing Redux Framework From tools .The value must be over 10

add_action( 'admin_menu', 'remove_redux_menu',12 );
	function remove_redux_menu() {
	remove_submenu_page('tools.php','redux-about');
}


// Adding activation js for countdown in footer

if (!function_exists('cs_inc_js')) {
	function cs_inc_js(){
		global $cs;
		$date     	= $cs['lunch-date'];
		$date_part 	= array();
		if (!empty($date)) {
		    $date_part = explode("/", $date);
		} else {
		    $date_part[0] = '6';//month
		    $date_part[1] = '10';//date
		    $date_part[2] = '2019';//year
		}
		?>
	        <script>
	        jQuery(document).ready(function ($) {
	            $('#simply-countdown-losange').simplyCountdown({
	                year: <?php echo $date_part[2] ?>, // required
	                month: <?php echo $date_part[0] ?>, // required
	                day: <?php echo $date_part[1] ?>, // required
	                enableUtc: false
	            });
	        });
	        </script>
		<?php
	}
	add_action( 'wp_footer' , 'cs_inc_js' );
}


?>