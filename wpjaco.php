<?php
/**
 * Jaco
 *
 * This plugin allows you to easily integrate Jaco into your WordPress website.
 *
 * @link    http://s3rgiosan.com/
 * @since   1.0.0
 *
 * @package Jaco
 *
 * @wordpress-plugin
 * Plugin Name:       Jaco
 * Plugin URI:        https://github.com/s3rgiosan/wpjaco/
 * Description:       Easy integration of Jaco into your WordPress website.
 * Version:           1.1.0
 * Author:            Sérgio Santos
 * Author URI:        http://s3rgiosan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpjaco
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/s3rgiosan/wpjaco
 * GitHub Branch:     master
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use s3rgiosan\Jaco;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * @since 1.0.0
 */
\add_action( 'plugins_loaded', function () {
	$plugin = new Jaco\Plugin( 'wpjaco', '1.1.0' );
	$plugin->run();
} );
