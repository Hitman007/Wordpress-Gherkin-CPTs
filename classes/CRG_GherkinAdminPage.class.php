<?php

class CRG_GherkinAdminPage{

	public $worpressAdminPage;

	function __construct(){}

	public function getAdminPageContents(){
		$this->calculatePageOutput();
		return ($this->worpressAdminPage);
	}

	private function calculatePageOutput(){
		$this->worpressAdminPage =
<<<OUTPUT_START_STOP_HERE_DOC
<div id = "crg_gherkin_container_div">

<h2>
	Features:
</h2>

<div id = "crg_gherkin_select_a_plugin_div">
	Select a plugin:
</div>

<div id = "crg_gherkin_select_a_theme_div">
	Select a theme:
</div>

</div><!-- <^--END <div id = "crg_gherkin_container_div"> -->
OUTPUT_START_STOP_HERE_DOC;

		include_once('CRG_LinkListOfPluginsAndThemes.class.php');
		$CRG_LinkListOfPluginsAndThemes = new CRG_LinkListOfPluginsAndThemes;
		//$x = $CRG_LinkListOfPluginsAndThemes->getLinkList();
		//$y = $this->worpressAdminPage;
		$this->worpressAdminPage = $this->worpressAdminPage . $CRG_LinkListOfPluginsAndThemes->getLinkList();

	}//<^-- END: private function calculate_worpressAdminPage(){

}//<^-- END: class CRG_GherkinPage{

?>
