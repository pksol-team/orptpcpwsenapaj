<?php
/*
Plugin Name: Quick and Easy Post edition for ACF Relationship Fields PRO
Description: Edit your posts from Advanced Custom Fields (ACF) Relationship Fields (PRO version)
Author: Bazalt
Version: 1.0
Author URI: http://bazalt.fr/
Text Domain: acf-relationship-edit
Domain Path: /languages/
*/

if ( ! class_exists( 'ACF_Relationship_Edit_Pro' ) ) :

    class ACF_Relationship_Edit_Pro
    {

        private static $_instance;

        /**
         * Singleton pattern
         * @return ACF_Relationship_Edit_Pro
         */
        public static function getInstance() {
            if( self::$_instance instanceof self ) return self::$_instance;
            self::$_instance = new self();
            return self::$_instance;
        }

        /**
         * Avoid creation of an instance from outside
         */
        private function __clone() {}


        /**
         * Private constructor (part of singleton pattern)
         * Declare WordPress Hooks
         */
        private function __construct() {
            // Load the plugin's translated strings
            add_action( 'plugins_loaded', array( $this, 'load_text_domain' ) );

            // Init
            add_action(
                'init',
                array($this, 'init'),
                6 // Right after ACF
            );
        }

        /**
         * Load the plugin's translated strings
         *
         * @hook action plugins_loaded
         */
        public function load_text_domain() {
            load_plugin_textdomain( 'acf-relationship-edit', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
        }

        /**
         * Check if ACF is installed
         *
         * @return bool
         */
        public static function is_acf_installed() {
            return class_exists( 'acf' );
        }

        /**
         * Check if ACF version is PRO
         *
         * @return bool
         */
        public static function is_acf_pro_version() {
            return class_exists( 'acf_pro' );
        }

        /**
         * Admin notice if ACF version isn't PRO
         *
         * @hook action admin_notices
         */
        public function admin_notice_bad_ACF_version() {
            ?>
            <div class="notice notice-error is-dismissible">
                <p>
                    <?php _e( 'You are using the free version of Advanced Custom Fields plugin. You have to upgrade to pro version to use `Advanced Custom Fields Relationship Edit` plugin', 'acf-relationship-edit' ); ?>
                </p>
            </div>
            <?php
        }

        /**
         * Init method, called right after ACF
         *
         * @hook action init
         */
        public function init() {

            // Stop here if ACF isn't installed
            if( !self::is_acf_installed() )
                return;

            // Bail early with an error notice if ACF version isn't PRO
            if( !self::is_acf_pro_version() ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_bad_ACF_version' ) );
                return;
            }

            /**
             * Register scripts
             */

            // Tools
            wp_register_script(
                'acf-relationship-edit-pro',
                plugins_url('assets/js/acf-relationship-edit' . ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min' ) . '.js', __FILE__),
                array( 'jquery' ),
                '1.0'
            );

            // Relationship field script
            wp_register_script(
                'acf-relationship-edit-pro-field',
                plugins_url('assets/js/acf-relationship-edit-field' . ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min' ) . '.js', __FILE__),
                array( 'acf-relationship-edit-pro', 'thickbox', 'acf-input' ),
                '1.0'
            );

            // iframe script
            wp_register_script(
                'acf-relationship-edit-pro-iframe',
                plugins_url('assets/js/acf-relationship-edit-iframe' . ( ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min' ) . '.js', __FILE__),
                array( 'acf-relationship-edit-pro' ),
                '1.0'
            );

            wp_register_style(
                'acf-relationship-edit-pro',
                plugins_url( 'assets/css/acf-relationship-edit.css', __FILE__ ),
                array( 'acf-input', 'thickbox' ),
                '1.0'
            );


            /**
             * Admin enqueue scripts
             */
            add_action(
                'admin_enqueue_scripts',
                array( $this, 'admin_scripts'),
                11 // Right after ACF
            );


            /**
             * ACF Hooks
             */

            // Enqueue assets for ACF fields
            add_action( 'acf/input/admin_enqueue_scripts', array( $this, 'enqueue_acf_assets' ), 11 ); // Just after ACF scripts
        }

        /**
         * Include scripts
         *
         * @hook action admin_enqueue_scripts
         *
         * @param $hook
         */
        public function admin_scripts( $hook ) {
            if( in_array( $hook, array( 'post.php' ) ) ) {
                wp_enqueue_script( 'acf-relationship-edit-pro-iframe' );
                wp_localize_script(
                    'acf-relationship-edit-pro-iframe',
                    'acf_relationship_edit_pro_iframe',
                    array(
                        'post_saved' => ( !empty( $_GET['message'] ) )
                    )
                );
            }
        }

        /**
         * Enqueue assets for ACF fields
         *
         * @hook action acf/input/admin_enqueue_scripts
         */
        public function enqueue_acf_assets() {
            wp_enqueue_script( 'acf-relationship-edit-pro-field' );
            wp_localize_script(
                'acf-relationship-edit-pro-field',
                'acf_relationship_edit_pro_field',
                array(
                    'admin_edit_url' => admin_url('post.php'),
                    'i18n' => array(
                        'edit_post' => __( 'Edit post', 'acf-relationship-edit' )
                    )
                )
            );

            wp_enqueue_style( 'acf-relationship-edit-pro' );
        }
    }

    ACF_Relationship_Edit_Pro::getInstance();
endif;