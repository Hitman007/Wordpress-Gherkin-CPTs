<?php
class CRG_GherkinDefaultEnglishPickles{

	function __construct(){
		$this->addTermsToTaxonomy();
	}//<^-- END function __construct(){

	function addTermsToTaxonomy(){
		wp_insert_term( __('Features'),'pickle-type', array( 'description' => __('Features are what the system does, or should do.'),'slug' => 'feature'));
		wp_insert_term( __('Scenarios'),'pickle-type', array( 'description' => __('Features are composed of scenarios.'),'slug' => 'scenario'));
		wp_insert_term( __('Backgrounds'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Scenario Outlines'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Terms'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Actors'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Values'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Hurdles'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Spears'),'pickle-type', array( 'description' => __(''),'slug' => ''));
	}//<^-- END 
}
?>
