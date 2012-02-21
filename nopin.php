<?php 
/*
Plugin Name: NoPIN
Plugin URI: http://www.shawnhooper.ca/nopin-plugin
Description: Blocks users from "pinning" images from your site on the Pinterest social network
Version: 1.0
Author: Shawn M. Hooper
Author URI: http://www.shawnhooper.ca/
License: GPL
*/

?>
<?php
/*  Copyright 2012  SHAWN M. HOOPER  (email : mail@shawnhooper.ca)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?
class NoPIN {
	function AddNoPinMetaTag() {
		echo "<meta name=\"pinterest\" content=\"nopin\" />\n";
	}
}

add_action ( 'wp_head', array ('NoPIN', 'AddNoPinMetaTag' ) )
?>
