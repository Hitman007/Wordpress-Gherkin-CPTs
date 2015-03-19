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

include "classes/CRG_GherkinPlugin.class.php";

$CRG_GherkinPlugin = new CRG_GherkinPlugin;

$CRG_GherkinPlugin->registerAcitvationHook();
//$CRG_GherkinPlugin->registerAdminPage();
$CRG_GherkinPlugin->registerAndEnqueueScripts();
$CRG_GherkinPlugin->registerCustomPostTypes();
$CRG_GherkinPlugin->receivePickleIfSubmitted();
$CRG_GherkinPlugin->addFeatureRequestLinksInPluginsAdminSection();
$CRG_GherkinPlugin->registerFeaturesAdminPage();

//This is an autoloader for the classes nessicary for this plugin:
function CRGautoloader($class) {
    include 'classes/' . $class . '.class.php';
}





//This section deals with the admin pages:
add_action( 'admin_menu', 'registerFeaturesMenuPage' );
function registerFeaturesMenuPage(){
	add_menu_page( 'Features', 'Features', 'activate_plugins', 'custompage', 'startGherkinAdminPage', plugins_url( "/crg_gherkin/assets/images/pickle.gif" ) ); 
}
function startGherkinAdminPage(){

}
//END //This section deals with the admin pages:
?>
