<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hosted_Solution_Woo
 * @subpackage Hosted_Solution_Woo/admin
 * @author     mbj-webdevelopment <mbjwebdevelopment@gmail.com>
 */
class Hosted_Solution_Woo_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }   

    public function load_plugin_extend_lib() {
        if (!class_exists('WC_Payment_Gateway')) {
            return;
        }
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/class-hosted-solution-woo-admin-paypal-pro-hosted.php';
    }
    
     public function all_in_one_paypal_for_woocommerce_add_gateway($methods) {
        $methods[] = 'Hosted_Solution_Woo_Admin_WooCommerce_Pro_Hosted';
        return $methods;
    }

}
