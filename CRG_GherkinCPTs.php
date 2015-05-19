<?php
/*
Plugin Name: CRG Gherkin Custom Post Types
Plugin URI: http://customrayguns.com
Description: CRG Gherkin CPTs
Version: 1.1
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Gherkin_Text_Domain
*/

include "classes/CRG_GherkinCPTsPlugin.class.php";

$CRG_GherkinCPTsPlugin = new CRG_GherkinCPTsPlugin;

$CRG_GherkinCPTsPlugin->registerAcitvationHook(__FILE__);
$CRG_GherkinCPTsPlugin->registerAndEnqueueScripts();
$CRG_GherkinCPTsPlugin->registerCustomPostTypes();
$CRG_GherkinCPTsPlugin->receivePickleIfSubmitted();
//$CRG_GherkinCPTsPlugin->addFeatureRequestLinksInPluginsAdminSection();
//$CRG_GherkinCPTsPlugin->registerFeaturesAdminPage();
?>
