<?php

/**
 * Theme customizations
 *
 * @package      wpdt
 * @author       Chris Hurst
 * @link         http://wpdt.rda.net/
 * @copyright    Copyright (c) 2016, Chris Hurst
 * @license      GPL-2.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'wpdt' );

add_action( 'genesis_setup', 'wpdt_setup' );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */
function wpdt_setup() {

}