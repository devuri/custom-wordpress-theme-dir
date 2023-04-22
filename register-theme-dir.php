<?php

/**
 * Custom Theme Directory.
 *
 * @author            Uriel Wilson.
 * @copyright         2023 Uriel Wilson.
 * @license           GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Theme Directory
 * Description:       Registers a custom theme directory located outside of wp-content.
 * Plugin URI:        https://urielwilson.com/wordpress-plugins/
 * Requires at least: 5.3.0
 * Requires PHP:      7.4
 * Author:            Uriel Wilson
 * Author URI:        https://urielwilson.com
 * Domain Path:       /languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

register_theme_directory( APP_THEME_DIR );
