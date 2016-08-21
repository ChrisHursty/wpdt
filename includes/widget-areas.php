<?php
/**
 * Register widget areas
 *
 * @package      wpdt
 * @author       Chris Hurst
 * @link         http://wpdt.rda.net/
 * @copyright    Copyright (c) 2016, Chris Hurst
 * @license      GPL-2.0+
 */

// Register front page widget areas
genesis_register_sidebar( array(
    'id'            => 'home-welcome',
    'name'          => __( 'Home Welcome', 'wpdt' ),
    'description'   => __( 'This is a home widget area that will show on the front page', 'wpdt' ),
) );
genesis_register_sidebar( array(
    'id'            => 'call-to-action',
    'name'          => __( 'Call to Action', 'wpdt' ),
    'description'   => __( 'This is a call to action widget area that will show on the front page', 'wpdt' ),
) );