<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://ponceelrelajado.com
 * @since      1.0.0
 *
 * @package    Custom_Share_Icons
 * @subpackage Custom_Share_Icons/public
 * @author     Jhonatan Ponce (ponceelrelajado) <ponceelrelajado@gmail.com>
 */
class Custom_Share_Icons_Public {
        private $plugin_name;
        private $plugin_version;
        private $current_user;
        private $current_user_meta;
        private $meta_keys;
        private $expire_time;
        private $options;
        private $wrapper_options;


        /**
         * Initialize the class and set its properties.
         * @since    1.0.0
         *
         * @param      string $plugin_name The name of the plugin.
         * @param      string $version The version of this plugin.
         */
        public function __construct( $plugin_name, $version ) {

                $this->plugin_name    = $plugin_name;
                $this->version = $version;
                $this->expire_time    = 300;

                $this->options         = get_option( $this->plugin_name );
                

                add_shortcode('custom_share',
                              array($this, 'custom_share'));
                add_shortcode('setPostShares',
                              array($this, 'setPostShares'));
                add_shortcode('getPostShares',
                              array($this, 'getPostShares'));
                add_action('wp_ajax_my_action',
                              array($this, 'setPostShares'));
                add_action('wp_ajax_nopriv_my_action',
                              array($this, 'setPostShares'));
        }

        /**
         * Register the stylesheets for the public-facing side of the site.
         * @since    1.0.0
         */
        public function enqueue_styles() {
                wp_enqueue_style(
                        $this->plugin_name,
                        plugin_dir_url( __FILE__ ) . 'css/custom_share.css',
                        array(), $this->version, 'all' );
        }

        /**
         * Register the JavaScript for the public-facing side of the site.
         * @since    1.0.0
         */
        public function enqueue_scripts() {
                wp_enqueue_script(
                        $this->plugin_name,
                        plugin_dir_url( __FILE__ ) . 'js/custom_share.js',
                        array( 'jquery' ), $this->version, false );
                wp_localize_script( 
                        $this->plugin_name, 
                        'ajax_object', 
                        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ));
        }


        /**
         * Add message to queue
         *
         * @param  string $message Content of the message
         * @param  string $type Type of message. Default is 'danger'
         * @param  string $title Message title. Default is 'Oops!'
         */
        function flash_message(
                $message = 'An error has ocurred',
                $type = 'danger',
                $title = 'Oops!'
        ) {

                do_action( 'queue_flash_message',
                        '<p>' . $message . '</p>',
                        $title, $type );
        }


        function custom_share($atts) {
            ob_start();
            global $wp_query; 
            $postid = $wp_query->post->ID;
            $post = get_post($postid);
            $permalink = get_permalink($postid);
            $title =  $post->post_title;
            $url_image = wp_get_attachment_url( get_post_thumbnail_id($postid) );
            $description = $post->post_excerpt;
            $share_details="";
                extract(shortcode_atts(array(
                        'social' => 'facebook',
                        'aclass' => 'btn btn-default',
                        'iclass' => 'fa fa-facebook'
               ), $atts));
            $socials = $social;
            $aclass =  $aclass;
            $iclass =  $iclass;
            include( 'partials/custom_share.php');

            return ob_get_clean();
        }

        function setPostShares($postID) {

            global $wpdb;
            if($_GET['postid']){

                $postID = $_GET['postid'];
                $count_key = 'custom_shares_count';
                $count = get_post_meta($postID, $count_key, true);
                if($count==''){
                    $count = 1;
                    delete_post_meta($postID, $count_key);
                    add_post_meta($postID, $count_key, $count);
                }else{
                    $count++;
                    update_post_meta($postID, $count_key, $count);
                }

             }
             wp_die();
        }

        function getPostShares($postID){
            global $wp_query; 
            $postID = $wp_query->post->ID;
            $count_key = 'custom_shares_count';
            $count = get_post_meta($postID, $count_key, true);
            if($count==''){
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
                return "0";
            }
            return $count;
        }

}
