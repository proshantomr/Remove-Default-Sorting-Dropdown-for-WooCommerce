<?php

defined( 'ABSPATH' ) || exit;

class Remove_Default_Sorting_Dropdown {

    public string $file;
    public string $version;

    public function __construct($file, $version = "1.0.0") {
        $this->file = $file;
        $this->version = $version;
        $this->define_constants();
        $this->init_hooks();

        register_activation_hook( $this->file, array( $this, 'activation_hook' ) );
        register_deactivation_hook( $this->file, array( $this, 'deactivation_hook' ) );
    }

    public function define_constants() {
        define( 'RDSD_VERSION', $this->version );
        define( 'RDSD_FILE', $this->file );
        define( 'RDSD_PLUGIN_DIR', plugin_dir_path( $this->file ) );
        define( 'RDSD_PLUGIN_URL', plugin_dir_url( $this->file ) );
        define( 'RDSD_PLUGIN_BASENAME', plugin_basename( $this->file ) );
    }

    public function init() {
        new Remove_Default_Sorting_Dropdown_Admin();
    }

    public function activation_hook() {

    }

    public function deactivation_hook() {

    }

    public function init_hooks() {
        add_action('plugins_loaded', array($this, 'load_plugin_textdomain'));
        add_action('init', array($this, 'init'));
    }

    public function load_plugin_textdomain() {
        load_plugin_textdomain('remove-default-sorting-dropdown', false, basename(dirname(__FILE__)) . '/languages/'); // Correct text domain
    }
}
