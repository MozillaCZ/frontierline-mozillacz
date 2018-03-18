<?php

/* Enqueue Frontierline original stylesheet */
add_action('wp_enqueue_scripts', 'frontierline_css');
function frontierline_css() {
    wp_enqueue_style('frontierline', get_template_directory_uri().'/style.css');
}

/* Enqueue Font Awesome */
add_action('wp_enqueue_scripts', 'font_awesome_js');
function font_awesome_js() {
    wp_enqueue_script('font_awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js');
}

add_filter('script_loader_tag', 'font_awesome_html_tag', 10, 3);
function font_awesome_html_tag($tag, $handle, $src) {
    if ('font_awesome' === $handle) {
        $tag = str_replace('></script>', ' defer integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>', $tag);
    }
    return $tag;
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
