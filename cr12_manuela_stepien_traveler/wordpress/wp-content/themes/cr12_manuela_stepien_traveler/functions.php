<?php
// Register Nav Walker class_alias
require_once('wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){
	//Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
		));
}
add_action('after_setup_theme','wpb_theme_setup');


function set_excerpt_length(){
	return 50;
}

add_filter('excerpt_length','set_excerpt_length');

add_theme_support('post-thumbnails');

//Widget - sidebar
function wpb_init_widgets(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		));
}
add_action('widgets_init', 'wpb_init_widgets');






?>

