<?php 
/**
 * Plugin name: Admin Notice 
 * Description: This is admin notice plugin
 * Url: http://admin-notice.com
 * Version: 0.0.1
 */


 class an_admin_notice {
     public function __construct() {

          // WordPress version check
          if ( version_compare( get_bloginfo( 'version' ), '6.5', '<' ) ) {
               $this->show_wp_required_notice();
               return;
          }



          // PHP version check
          if ( version_compare( phpversion(), '8.1', '<' ) ) {
               $this->show_php_required_notice();
               return;
          }
    }


    
     // WordPress version notice
     public function show_wp_required_notice() {
          add_action('admin_notices', function() {
               ?>
               <div class="notice notice-error is-dismissible">
                    <p>You need WordPress version 6.5 or higher to use this plugin.</p>
               </div>
               <?php
          });
     }






     // PHP version notice
     public function show_php_required_notice() {
          add_action('admin_notices', function() {
               ?>
               <div class="notice notice-error is-dismissible">
                    <p>You need PHP version 8.3 or higher to use this plugin.</p>
               </div>
               <?php
          });
     }




   
}

// Initialize the class
new an_admin_notice();