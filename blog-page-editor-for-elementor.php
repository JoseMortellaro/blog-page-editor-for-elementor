<?php
/*
Plugin Name: Blog page editor for elementor
Description: It allows you to edit the blog page content with Eementor
Author: Jose Mortellaro
Author URI: https://josemortellaro.com
Domain Path: /languages/
Text Domain: blog-page-editor-for-elementor
Version: 0.0.3
Elementor tested up to: 3.17.2
Elementor Pro tested up to: 3.17.1
Requires Plugins: elementor
*/
/*  This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

if( isset( $_REQUEST['action'] ) &&  in_array(  sanitize_text_field( $_REQUEST['action'] ),array( 'elementor','elementor_ajax' ) ) || isset( $_REQUEST['elementor-preview'] ) ){
	add_filter( 'option_page_for_posts','__return_false' );
}
