<?php
if (!function_exists('cs_style_js')) {
    function cs_style_js() {
    	// Styles
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'ain-css', get_template_directory_uri() . '/css/ain-css.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'style', get_stylesheet_uri() , array(), '1.0', 'all'  );
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array('style'), '1.0', 'all'  );
    	//scripts 
        wp_enqueue_script( 'simplyCountdown', get_template_directory_uri() . '/js/simplyCountdown.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'cs_style_js' );
}

// IE Support

if (!function_exists('cs_ie_support')) {
    function cs_ie_support(){
    	?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    	<?php
    }
    add_action('wp_head', 'cs_ie_support');
}

?>