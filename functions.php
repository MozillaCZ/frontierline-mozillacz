<?php

/* Enqueue Frontierline original stylesheet */
add_action('wp_enqueue_scripts', 'frontierline_css');
function frontierline_css() {
    wp_enqueue_style('frontierline', get_template_directory_uri().'/style.css');
}

/* Enqueue Font Awesome */
add_action('wp_enqueue_scripts', 'font_awesome_css');
function font_awesome_css() {
    wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

/* Register Mozilla Communities logo for setting it into the header */
register_default_headers( array(
	'mozilla-cz' => array(
		'url' => get_stylesheet_directory_uri().'/img/header-mozillacz-03.png',
		'thumbnail_url' => get_stylesheet_directory_uri().'/img/header-mozillacz-03.png',
		'description' => 'Mozilla.cz'
	)
 )
);
