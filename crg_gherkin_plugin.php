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

//This is an autoloader for the classes nessicary for this plugin:
function CRGautoloader($class) {
    include 'classes/' . $class . '.class.php';
}

//Registers the CPTs:
CRGautoloader("CRG_GherkinCustomPostTypes");
$CRG_GherkinCustomPostTypes = new CRG_GherkinCustomPostTypes;

//Register activation hook:
register_activation_hook(__FILE__,array($CRG_GherkinCustomPostTypes,'activate'));

//If a pickle is being submitted, then launch the Pickle Receiver:
if (isset($_POST['CRG_Gherkin_form_submit_button'])){
	CRGautoloader("CRG_GherkinReceiver");
	$CRG_GherkinReceiver = new CRG_GherkinReceiver;
}

//CSS:
wp_register_style( 'CRG Gherkin Plugin CSS', plugins_url( '/crg_gherkin/css/crg_gherkin_plugin.css' ) );
wp_enqueue_style( 'CRG Gherkin Plugin CSS' );

//jQuery:
wp_register_script('CRG Gherkin Plugin JS', plugins_url( '/crg_gherkin/js/crg_gherkin.js' ), "jquery-core" );
wp_enqueue_script( 'CRG Gherkin Plugin JS' );
?>
