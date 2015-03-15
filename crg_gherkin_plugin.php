<?php
/*
Plugin Name: CRG Gherkin Plugin
Plugin URI: http://customrayguns.com
Description: CRG Gherkin
Version: 1.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Gherkin
*/

//Load Custom Ray Gun's Gherkin CPTs:
//include_once(plugin_dir_path( __FILE__ ) . "methods/CRGcreateGherkCPTs.php" );

//This loads the classes nessicary for this plugin:
function CRGautoloader($class) {
    include 'classes/' . $class . '.class.php';
}
// <^-- END //This loads the classes nessicary for this plugin:

CRGautoloader("CRG_GherkinCustomPostTypes");
$CRG_GherkinCustomPostTypes = new CRG_GherkinCustomPostTypes;
register_activation_hook(__FILE__,array($CRG_GherkinCustomPostTypes,'activate'));

//If a pickle is being submitted, then launch the Pickle Receiver
if (isset($_POST['CRG_Gherkin_form_submit_button'])){
	CRGautoloader("CRG_GherkinReceiver");
	$CRG_GherkinReceiver = new CRG_GherkinReceiver;
}

wp_register_style( 'CRG Gherkin Plugin CSS', plugins_url( '/crg_gherkin/css/crg_gherkin_plugin.css' ) );
wp_enqueue_style( 'CRG Gherkin Plugin CSS' );
	wp_register_script('CRG Gherkin Plugin JS', plugins_url( '/crg_gherkin/js/crg_gherkin.js' ), "jquery-core" );
	wp_enqueue_script( 'CRG Gherkin Plugin JS' );

//The main functionality of this plugin is outputed to Wordpress via a shortcode: [CRG_GherkinShortcode]
function CRG_GherkinShortcode(){

	CRGautoloader("CRG_GherkinShortcode");
	$CRG_GherkinShortcode = new CRG_GherkinShortcode;
	return $CRG_GherkinShortcode->getShortcodeOutput();
}
add_shortcode('CRG_GherkinShortcode', 'CRG_GherkinShortcode');
//<^-- END //The main functionality of this plugin is outputed to Wordpress via a shortcode: [CRG_GherkinShortcode]



?>
