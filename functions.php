<?php
/* Enqueue Font Awesome */
add_action('wp_enqueue_scripts', 'font_awesome_css');
function font_awesome_css() {
    wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

