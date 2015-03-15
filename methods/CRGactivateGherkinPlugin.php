<?php
function CRGactivateGherkinPlugin(){
	wp_insert_term(
		'Scenario', // the term 
		'gherkin_types', // the taxonomy
		array(
			'description'=> 'Scenarios are statements made up of pickles.',
			'slug' => 'scenarios'
		)
	);
	wp_insert_term(
		'Features', // the term 
		'gherkin_types', // the taxonomy
		array(
			'description'=> 'A feature is made up of scenarios.',
			'slug' => 'feature'
		)
	);
	wp_insert_term(
		'Terms', // the term 
		'gherkin_types', // the taxonomy
		array(
			'description'=> 'Terms',
			'slug' => 'term'
		)
	);
}
//die("29");
//CRGcreateGherkCustomPostType();
//CRGactivateGherkinPlugin();
//add_action('wp_loaded','CRGactivateGherkinPlugin',11);
?>
