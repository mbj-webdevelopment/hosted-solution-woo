<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Hosted Solution for Woo
 * Plugin URI:        http://localleadminer.com/
 * Description:       PayPal Hosted Solution offers merchants a way to safely accept credit payments and debit cards or PayPal without capturing or storing card information on its website. Payment information is collected via PayPal using an inline frame.
 * Version:           1.0.0
 * Author:            mbj-webdevelopment
 * Author URI:        http://localleadminer.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hosted-solution-woo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hosted-solution-woo-activator.php
 */
function activate_hosted_solution_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hosted-solution-woo-activator.php';
	Hosted_Solution_Woo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hosted-solution-woo-deactivator.php
 */
function deactivate_hosted_solution_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hosted-solution-woo-deactivator.php';
	Hosted_Solution_Woo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hosted_solution_woo' );
register_deactivation_hook( __FILE__, 'deactivate_hosted_solution_woo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hosted-solution-woo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hosted_solution_woo() {

	$plugin = new Hosted_Solution_Woo();
	$plugin->run();

}
run_hosted_solution_woo();
