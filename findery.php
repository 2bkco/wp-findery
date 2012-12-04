<?php
/*
Plugin Name: Findery
Plugin URI: http://findery.com
Description: A shortcode plugin for embedding content from Findery
Version: 0.1
Author: Findery
Author URI: http://findery.com
License: [Add this]
*/

function findery_embed( $atts ) {

  $type = '';

  extract( shortcode_atts( array (
    'w' => '500',
    'h' => '400'
  ), $atts ));

  return sprintf('<iframe src="%s" width="%s" height="%s"></iframe>', # <iframe> code
                 preg_replace('/([^\/:])\//', '${1}/embed/', $atts[0], 1), # Add /embed prefix to URL
                 $atts['width'], # Width
                 $atts['height']); # Height

}

function register_findery_shortcode() {
  add_shortcode( 'findery', 'findery_embed' );
}

add_action( 'init', 'register_findery_shortcode' );