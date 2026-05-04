<?php
/*
 * Plugin Name:       Wonolog as plugin
 * Description:       Install `Wonolog` as a plugin.
 * Version:           3.0.2+0
 * Requires at least: 5.9
 * Requires PHP:      8.1
 * Author:            Itou Kousuke
 * Author URI:        mailto:chrono-meter@gmx.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// Check another "wonolog" instance is already set up.
if ( did_action( 'wonolog.setup' ) ) {
	return;
}

require_once __DIR__ . '/vendor/autoload.php';
add_action( 'plugins_loaded', fn() => ( \Inpsyde\Wonolog\Configurator::new() )->setup() );
