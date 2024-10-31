<?php
/*
 * Plugin Name: Reveal Box
 * Description: A plugin wich uses the jQuery modal plugin called Reveal (Zurb)
 * Version: 0.3
 * Author: Mick van Dijk & Zurb
 * Author URI: http://mickvandijk.nl/ & http://zurb.com/playground/reveal-modal-plugin
*/

/*****************
* global variables
******************/

$rb_prefix = 'rb_';
$rb_plugin_name = 'Reveal Box';


// retrieve plugin settings from options table
$rb_options = get_option('rb_settings');


/*****************
* includes
******************/

include('includes/scripts.php');
include('includes/display-functions.php');
include('includes/admin-page.php');