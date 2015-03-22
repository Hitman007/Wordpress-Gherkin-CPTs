<?php

class CRG_LinkListOfPluginsAndThemes{

	public $output;

	function __construct(){}

	function getLinkList(){
		$plugins = get_plugins();
		foreach ($plugins as $plugin){

		var_dump($plugin);die();
			$output = $output . $plugin['Name'] . "<br />";
		}
		return $output;
	}
}

?>