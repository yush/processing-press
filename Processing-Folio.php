<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that also follow
 * WordPress coding standards and PHP best practices.
 *
 * @package   processing-press
 * @author    Sushi<email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name: processing-press
 * Plugin URI:  TODO
 * Description: processing press
 * Version:     1.0.0
 * Author:      TODO
 * Author URI:  TODO
 * Text Domain: processing-press-fr
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// TODO: replace `class-plugin-name.php` with the name of the actual plugin's class file
require_once( plugin_dir_path( __FILE__ ) . 'class-Processing-Folio.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
// TODO: replace PluginName with the name of the plugin defined in `class-plugin-name.php`
register_activation_hook( __FILE__, array( 'ProcessingFolio', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ProcessingFolio', 'deactivate' ) );
// add_shortcode("processing",  array( 'ProcessingFolio', "processing_shortcode" ));


// TODO: replace PluginName with the name of the plugin defined in `class-plugin-name.php`
ProcessingFolio::get_instance();
