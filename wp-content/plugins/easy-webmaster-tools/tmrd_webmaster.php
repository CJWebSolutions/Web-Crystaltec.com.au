<?php 

/**
 * Plugin Name: Easy Google Webmaster Tools
 * Plugin URI: http://nakshighor.com/plugins/
 * Description: Easy Google Webmaster tools is one of the best simple plugin to add or connect your websites with Google Webmaster tools.Its really easy for use everyone.Just install the plugin as like other wordpress plugin.And then you will see the analytics options in your dashboard.Then click Webmaster tools options and then you see a textarea.You will just copy the Google Webmaster alternatibe html meta tag  code and paste here. That's it and you will enjoy now. And Then you will get all kind of sites error and other  reports from Google Webmaster tools options. Because your all pages of your websites now link up or connected with google Webmaster tools. So, enjoy and don't forget to rated us five star feedback.
 
 * Version:  1.0.0
 * Author: Theme Road
 * Author URI: http://nakshighor.com/plugins/
 * License:  GPL2
 *Text Domain: tmrd
 *  Copyright 2015 GIN_AUTHOR_NAME  (email : BestThemeRoad@gmail.com)
 *
 *	This program is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License, version 2, as
 *	published by the Free Software Foundation.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */








require_once( 'tmrd/tr_settings.php' );







function tmrd_google_webmaster(){

	 $options = get_option('tr_theme_options', tr_default_option_value()); 


echo $options['textarea_demo'];

}
add_action('wp_head','tmrd_google_webmaster');




