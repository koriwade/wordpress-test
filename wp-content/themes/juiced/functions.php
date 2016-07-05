<?php 

function testSite_recources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts' , 'testSite_recources');

//navigation menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __('Footer Menu'),
));