<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

    	//wp_register_script(handle, path, dependency, version, load_in_footer);

        wp_deregister_script('jquery');
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.js', false, false, true);

    	//Registration
		wp_register_script('easing', THEME_FOLDER . '/assets/scripts/jquery.easing.min.js', array('jquery'), false, true);
		wp_register_script('fancybox', THEME_FOLDER . '/assets/scripts/jquery.fancybox.min.js', array('easing'), false, true);
		wp_register_script('owl-carousel', THEME_FOLDER . '/assets/scripts/owl.carousel.min.js', array('fancybox'), false, true);
		wp_register_script('custom', THEME_FOLDER . '/assets/scripts/custom.js', array('owl-carousel'), false, true);

		//Loading
		wp_enqueue_script('jquery');
		wp_enqueue_script('easing');
		wp_enqueue_script('fancybox');
		wp_enqueue_script('owl-carousel');
		wp_enqueue_script('custom');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined('THEME_FOLDER') ) {
		//wp_register_style(handle, path, dependency, version, devices);	

		//Registration
		wp_register_style('fancybox', THEME_FOLDER . '/assets/css/jquery.fancybox.min.css', array(), false, 'all');
		wp_register_style('owl-carousel', THEME_FOLDER . '/assets/css/jquery.fancybox.min.css', array('fancybox'), false, 'all');
		wp_register_style('owl-theme', THEME_FOLDER . '/assets/css/owl.theme.default.min.css', array('owl-carousel'), false, 'all');
		wp_register_style('style', THEME_FOLDER . '/assets/css/style.css', array('owl-theme'), false, 'all');

		//Loading
		wp_enqueue_style('fancybox');
		wp_enqueue_style('owl-carousel');
		wp_enqueue_style('owl-theme');
		wp_enqueue_style('style');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}


function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

