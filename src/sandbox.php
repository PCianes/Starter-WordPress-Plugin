<?php
/**
 * Exception handling
 *
 * @package     PCianes
 * @since     	1.0.0
 * @author      Pablo Cianes
 * @link     	https://pablocianes.com
 * @license     GPL-2.0+
 */
namespace PCianes;

add_action( 'loop_start', __NAMESPACE__ . '\demo');
/**
 * Demo - testing purposes
 * 
 * @since 1.0.0
 * 
 * @return void
 */
function demo(){

// error();
//	var_dump( get_the_ID() );
//	echo get_the_ID();
	d( get_the_ID());
}