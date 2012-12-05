# WP-Findery

Allows for shortcode embedding of [Findery](http://findery.com) notes in Wordpress blogs.

## Usage

WP-Findery provides several ways to embed Findery content in your Wordpress blog.

### Method 1: Link

Simply pasting a link to a Findery note in the Wordpress editor will automatically embed the note in your blog.

``` https://findery.com/caterina/notes/the-giants-causeway ```

### Method 2: Shortcode

Use a link, similar to the method above, inside of a Findery shortcode. You may optionally specify a width and height when using this method.

``` [findery https://findery.com/caterina/notes/the-giants-causeway] ```

``` [findery https://findery.com/caterina/notes/the-giants-causeway w="100%" h="400"] ```

### Method 3: Embed code

If you visit the page for any note on Findery, you will find an 'Embed' button that will provide you with code to embed that note. Copy and paste that code into the Wordpress editor, and WP-Findery will automatically convert the code into a shortcode.

![Screenshot of Findery embed code](http://cl.ly/image/1B0G0D0l1a3G/Screen%20Shot%202012-12-05%20at%2012.36.37%20PM.png)

## License

License: GPLv2 or later

Copyright (C) 2012 Findery

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.