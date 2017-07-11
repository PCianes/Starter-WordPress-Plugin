<?php
/**
 * Starter WordPress Plugin
 *
 * @package     PCianes
 * @author      Pablo Cianes
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Starter WordPress Plugin
 * Plugin URI:  https://pablocianes.com
 * Description: This "starter plugin" is a Sandbox plugin for development in WordPress.
 * Version:     1.0.0
 * Author:      Pablo Cianes
 * Author URI:  https://pablocianes.com
 * Text Domain: starter-plugin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace PCianes;

if ( !defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php');


add_action( 'init', __NAMESPACE__ . '\launch');

function launch(){

}