<?php

defined( 'ABSPATH' ) || exit;

class Remove_Default_Sorting_Dropdown_Admin {
    /**
     * Custom_WooCommerce_Removal constructor.
     *
     * Initializes the class and hooks the removal function to the 'wp' action.
     *
     * @since 1.0.0
     */
    public function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
        add_action('wp', array($this, 'remove_default_sorting_dropdown'));

    }
    /**
     * Enqueue admin assets for the plugin.
     *
     * This method registers and enqueues the CSS and JavaScript files required for
     * the plugin's admin interface. It ensures that the styles and scripts are loaded
     * properly in the WordPress admin area.
     *
     * @since 1.0.0
     */
    public function enqueue_admin_assets() {
        wp_enqueue_style('rdsd_admin_style', RDSD_PLUGIN_URL . 'assets/css/admin.css', array(), RDSD_VERSION);
        wp_enqueue_script('rdsd_admin_style', RDSD_PLUGIN_URL . 'assets/js/admin.js', array(), RDSD_VERSION, true);

    }

    /**
     * Remove default sorting dropdown from WooCommerce shop and archive pages.
     *
     * This method checks if the current page is a shop, product category, or product tag page,
     * and then removes the default WooCommerce sorting dropdown.
     *
     * @since 1.0.0
     */
    public function remove_default_sorting_dropdown() {
        if ( is_shop() || is_product_category() || is_product_tag() ) {

            remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', '10');
            remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', '10');
        }
    }

}
