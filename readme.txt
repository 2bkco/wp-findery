=== WP-Findery ===
Contributors: themikeman
Tags: shortcode, embed
Requires at least: 3.0.1
Tested up to: 3.4.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows for shortcode embedding of [Findery](http://findery.com) notes in Wordpress blogs.

== Description ==

Allows for shortcode embedding of [Findery](http://findery.com) notes in Wordpress blogs.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Usage ==

WP-Findery provides several ways to embed Findery content in your Wordpress blog.

= Method 1: Link =

Simply pasting a link to a Findery note in the Wordpress editor will automatically embed the note in your blog.

`https://findery.com/caterina/notes/the-giants-causeway`

= Method 2: Shortcode =

Use a link, similar to the method above, inside of a Findery shortcode. You may optionally specify a width and height when using this method.

`[findery https://findery.com/caterina/notes/the-giants-causeway]`

`[findery https://findery.com/caterina/notes/the-giants-causeway w="100%" h="400"]`

= Method 3: Embed code =

If you visit the page for any note on Findery, you will find an 'Embed' button that will provide you with code to embed that note. Copy and paste that code into the Wordpress editor, and WP-Findery will automatically convert the code into a shortcode.

![Screenshot of Findery embed code](http://cl.ly/image/1B0G0D0l1a3G/Screen%20Shot%202012-12-05%20at%2012.36.37%20PM.png)

== Frequently Asked Questions ==

= What is Findery? =

With Findery, you can find and leave notes around the world. For more information, please check out our [FAQs](https://findery.com/faq).

== Changelog ==

= 0.1 =
* Initial release.