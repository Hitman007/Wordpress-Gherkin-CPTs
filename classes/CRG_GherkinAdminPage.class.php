<?php

class CRG_GherkinAdminPage{

	public $pageOutput;

	function __construct(){
		$this->calculatePageOutput();
		$this->echoPageOutput();
	}

	public function echoPageOutput(){
		echo ($this->pageOutput);
	}

	private function calculatePageOutput(){
		$this->pageOutput = 

<<<OUTPUT_START_STOP_HERE_DOC
Howdy day
OUTPUT_START_STOP_HERE_DOC;

	}//<^-- END private function calculateShortcodeOutput(){
}//<^-- END class CRG_GherkinAdminPage{

?>
