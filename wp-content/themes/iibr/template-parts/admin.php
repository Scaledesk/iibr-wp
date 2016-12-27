<?php 
function theme_admin()
	{
		//Generate Cigar admin page
		// add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
		add_menu_page( "Theme options", "Cigar", "manage_options", "official-theme-setting", "theme_init", 'dashicons-list-view', 90 );
		//Generate Cigar admin sub page
		 add_submenu_page('official-theme-setting', 'Theme options','setting', 'manage_options', 'theme-setting', 'theme_inits' );
	}
add_action('admin_menu','theme_admin');
function theme_init()
{

	//echo '<h1>Cigar theme option</h1>';
	// $current_user=wp_get_current_user();
	// $user_id=$current_user->ID;
	// echo "<pre>";
	// echo $user_id;
	// print_r($current_user);
}
function theme_inits()
{
require_once(get_template_directory().'/template-parts/cigar-thme-option.php');
}



?>