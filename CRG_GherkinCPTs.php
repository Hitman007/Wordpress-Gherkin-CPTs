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

include "classes/CRG_GherkinCPTs.class.php";

$CRG_GherkinCPTs = new CRG_GherkinCPTs;

$CRG_GherkinCPTs->registerAcitvationHook(__FILE__);
$CRG_GherkinCPTs->registerAndEnqueueScripts();
$CRG_GherkinCPTs->registerCustomPostTypes();
$CRG_GherkinCPTs->receivePickleIfSubmitted();
//$CRG_GherkinCPTs->addFeatureRequestLinksInPluginsAdminSection();
//$CRG_GherkinCPTs->registerFeaturesAdminPage();
?>
