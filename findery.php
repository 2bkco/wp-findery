<?php
/*
 * Plugin Name: Findery
 * Plugin URI: http://findery.com
 * Description: A shortcode plugin for embedding content from Findery in Wordpress blogs
 * Version: 0.1
 * Author: Findery
 * Author URI: http://findery.com
 *
 * License: GPLv2 or later
 *
 * Copyright (C) 2012 Findery
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Don't call this file directly.
 */
if ( ! class_exists( 'WP' ) ) {
  die();
}

final class Findery_Embed {

  private static $embed_base = '<iframe src="%s" width="%s" height="%s"></iframe>';
  private static $default_width = '500';
  private static $default_height = '400';

  public static function init() {
    wp_embed_register_handler('findery', '#https:\/\/findery.com\/(notes|sets|[_a-z0-9]+$|[-_a-z0-9]+\/notes)(?:\/)?([-_a-z0-9]+)?#i', array( __CLASS__, 'findery_embed_handler') );
  }

  public static function findery_embed_handler( $matches, $attr, $url, $rawattr ) {

    if ( ! empty( $rawattr['width'] ) && ! empty( $rawattr['height'] ) ) {
      $width  = $rawattr['width'];
      $height = $rawattr['height'];
    } else {
      list( $width, $height ) = wp_expand_dimensions( self::$default_width, self::$default_height, $attr['width'], $attr['height'] );
    }

    return sprintf(self::$embed_base,
                   preg_replace('/([^\/:])\//', '${1}/embed/', $url, 1),
                   $width,
                   $height);
  }

}

/**
 * Initialize plugin
 */

add_action( 'plugins_loaded', array( 'Findery_Embed', 'init' ) );