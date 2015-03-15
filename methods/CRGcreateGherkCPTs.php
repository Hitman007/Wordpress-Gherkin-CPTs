<?php
add_action('init', 'CRGcreateGherkCustomPostType');
add_action('admin_menu', 'crg_add_task_settings');
 
/**
* Registers the Gherks CPT to WordPress. Must be called in 'init' action hook.
*/
function CRGcreateGherkCustomPostType(){
	$labels = array(
		'name'                => _x( 'Gherks', 'Post Type General Name', 'crg_text_domain' ),
		'singular_name'       => _x( 'gherk', 'Post Type Singular Name', 'crg_text_domain' ),
		'menu_name'           => __( 'Gherks', 'crg_text_domain' ),
		'parent_item_colon'   => __( 'Parent Gherk:', 'crg_text_domain' ),
		'all_items'           => __( 'All Gherks', 'crg_text_domain' ),
		'view_item'           => __( 'View Gherk', 'crg_text_domain' ),
		'add_new_item'        => __( 'Add New Gherk', 'crg_text_domain' ),
		'add_new'             => __( 'Add New', 'crg_text_domain' ),
		'edit_item'           => __( 'Edit Gherk', 'crg_text_domain' ),
		'update_item'         => __( 'Update Gherk', 'crg_text_domain' ),
		'search_items'        => __( 'Search Gherk', 'crg_text_domain' ),
		'not_found'           => __( 'Not found', 'crg_text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'crg_text_domain' ),
	);
	$args = array(
		'label'               => __( 'gherk', 'crg_text_domain' ),
		'description'         => __( 'Gherks', 'crg_text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
		'taxonomies'          => array( 'Pickle Types' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type('gherk', $args);
	add_action('load-post-new.php', 'crg_add_help_tabs');
	add_action('load-post.php', 'crg_add_help_tabs');

}
 
/**
* Adds an admin page under Settings
*/
function crg_add_task_settings(){
	$page = add_options_page(
		'Book Settings', // Page Title
		'Gherks', // Menu Title
		'manage_options', // Capability
		'gherk', // Slug
		'crg_render_task_settings' // Callback
	);
	add_action("load-$page", 'crg_add_help_tabs');
}
 
/**
* Renders the content of our custom admin page
*/
function crg_render_task_settings(){}
 
/**
* Adds the help tabs to the current page
*/
function crg_add_help_tabs(){
	$screen = get_current_screen();
	if ('post' === $screen->base && 'task' !== $screen->post_type){return;}
	$tabs = array(
		array(
			'title' => 'All About Gherks',
			'id' => 'crg-Gherks-about',
			'content' => '<p>Gherks are pretty awesome...</p>'
		),
		array(
			'title' => 'More About Gherks',
			'id' => 'crg-Gherks-more',
			'callback' => 'crg_get_more_tab'
		)
	);
 
foreach($tabs as $tab) {$screen->add_help_tab($tab);}
 
$screen->set_help_sidebar('<a href="#">More info!</a>');
}
 
/**
* Outputs the content for the 'More About Gherks' Help Tab
*/
function crg_get_more_tab()
{ ?>
<p>Many long paragraphs about Gherks...</p>
<? }



?>
