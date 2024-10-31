<?php

/*****************
* script control
******************/

function rb_load_scripts() {
	wp_enqueue_style('rb-styles', plugin_dir_url(__FILE__) . 'css/plugin_styles.css');
	wp_enqueue_script('jquery.reveal', plugin_dir_url(__FILE__) . 'js/jquery.reveal.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'rb_load_scripts');