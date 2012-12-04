<?php
/*
Plugin Name: Findery
Plugin URI: http://findery.com
Description: A shortcode plugin for embedding content from Findery in Wordpress blogs
Version: 0.1
Author: Findery
Author URI: http://findery.com
License: MIT License (http://opensource.org/licenses/MIT)
*/

function findery_embed( $atts ) {

  extract( shortcode_atts( array (
    'w' => '500',
    'h' => '400'
  ), $atts ));

  return sprintf('<iframe src="%s" width="%s" height="%s"></iframe>',
                 preg_replace('/([^\/:])\//', '${1}/embed/', $atts[0], 1),
                 $atts['width'],
                 $atts['height']);

}

function register_findery_shortcode() {
  add_shortcode( 'findery', 'findery_embed' );
}

add_action( 'init', 'register_findery_shortcode' );