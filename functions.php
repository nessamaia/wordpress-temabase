<?php

// menus
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(array('menu' => __( 'Menu' )));
}

//widgets
if (function_exists('register_sidebar'))
{
	register_sidebar(array(
		'name'          => 'Sidebar1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Sidebar2',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}
 
?>