<?php
/**
* Plugin Name: Fix Elementor White Screen
*Description: This plugin does amazing things.
*Version: 1.0
*Author: Ekram Mallick
 * 
 **/

 namespace Elementor;

 add_action(
   'plugins_loaded',
   function() {
     if ( ! class_exists( 'Elementor\Scheme_Color' ) ) {
       class Scheme_Color extends Core\Schemes\Color {}
     }
   }
 );
 add_action(
   'plugins_loaded',
   function() {
     if ( ! class_exists( 'Elementor\Scheme_Typography' ) ) {
       class Scheme_Typography extends Core\Schemes\Typography {}
     }
   }
 );
 ?>