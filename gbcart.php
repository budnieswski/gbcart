<?php
/*
Plugin Name: GBCart
Plugin URI: #
Description: #
Version: 1.0
Author: Guilherme Budnieswski
Author URI: #
License: GPLv2
*/

/*
 *      Copyright 2014 Guilherme Budnieswski <guiiski@gmail.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

global $wpdb;

// Caminho absoluto para o diretorio do plugin
// DEFINE("PLUGIN_PATH", plugin_dir_path(__FILE__));
DEFINE("GBC_PATH", plugin_dir_path(__FILE__));
DEFINE("GBC_SQL_TABLE", $wpdb->prefix.'gb_cart');
DEFINE("GBC_SQL_TABLE_VERSION", '1.0');

// Arquivo que contem funcoes uteis para o desenvolvimento
require_once(GBC_PATH."core/functions.useful.php");

// Arquivo que contem funcoes para instalacao do plugin
require_once(GBC_PATH."core/functions.install.php");

// Contem funcoes para manipulacao do DB do plugin
require_once(GBC_PATH."core/functions.dao.php");

// Contem funcoes para manipulacao dos dados DB
require_once(GBC_PATH."core/functions.model.php");

// INSTALL
register_activation_hook( __FILE__, 'gbc_install_hook' );

add_action('admin_menu', 'gbc_install_menu');

#add_action( 'wp_enqueue_scripts', 'gbc_install_script' );

?>