<?php 

class artezzo_forms_functions {
	public static function init(){
		add_action('wp_enqueue_scripts', array('artezzo_forms_functions', 'load_scripts'));
	}

	public static function load_scripts() {
		wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	
		wp_enqueue_style('bootstrap-css', PASTA_FORM_PLUGIN.'flat-ui/dist/css/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');

		wp_enqueue_style('flat-ui-css', PASTA_FORM_PLUGIN.'flat-ui/dist/css/flat-ui.css', array(), '1.0');
		wp_enqueue_script('flat-ui-js', PASTA_FORM_PLUGIN.'flat-ui/dist/js/flat-ui.min.js', array('jquery'), '1.0' );
		wp_enqueue_script('application-js', PASTA_FORM_PLUGIN.'flat-ui/docs/assets/js/application.js', array('jquery'), '1.0' );

	}	
}

 ?>