<?php
/*
Plugin Name: CRG Gherkin Custom Post Types
Plugin URI: http://customrayguns.com
Description: CRG Gherkin CPTs
Version: 1.1
Author: Hitman007
Author URI: http://customrayguns.com
Text Domain: CRG_Gherkin_Text_Domain
*/

//load and instantiate the plugin:
include "classes/CRG_GherkinCPTsPlugin.class.php";
$CRG_GherkinCPTsPlugin = new CRG_GherkinCPTsPlugin;

//Normal Wordpress stuff:
$CRG_GherkinCPTsPlugin->registerAcitvationHook(__FILE__);
$CRG_GherkinCPTsPlugin->registerAndEnqueueScripts();

//The plugin's main functionality:
$CRG_GherkinCPTsPlugin->registerCustomPostTypes();

//A "pickle" is a single BDD statement, and the name of the CPT we use:
$CRG_GherkinCPTsPlugin->receivePickleIfSubmitted();

?>
