<?php

/**
 * Front page template
 *
 * @package      wpdt
 * @author       Chris Hurst
 * @link         http://wpdt.rda.net/
 * @copyright    Copyright (c) 2016, Chris Hurst
 * @license      GPL-2.0+
 */

/*
Template Name: Full Width
*/

// Add custom body class to the head for full width
add_filter( 'body_class', 'add_body_class' );

function add_body_class( $classes ) {
   $classes[] = 'wpdt-full-width';
   return $classes;
}

// Force full width page layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

genesis();
