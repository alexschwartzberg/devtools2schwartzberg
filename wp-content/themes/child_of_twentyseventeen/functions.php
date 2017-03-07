<?php
function my_theme_enqueue() {
	$parent_style = 'twentyfifteen-style'; //this is twentyseventeen-style for twenty fifteen theme
	wp_enqueue_style( '$parent_style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', //function to find the child style
        array( $parent_style ),
        wp_get_theme()->get('Version') //dont need to understand this line
        ); 
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue');
?>