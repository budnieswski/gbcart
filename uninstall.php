<?php
/*
* @/uninstall.php
*/

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
  die();

// delete_option( 'mmd_opcao' );

// Caminho absoluto para o diretorio do plugin
DEFINE("PLUGIN_PATH", plugin_dir_path(__FILE__));

// // Arquivo que contem funcoes uteis para o desenvolvimento
require_once(PLUGIN_PATH."core/functions.useful.php");

// // Arquivo que contem funcoes para instalacao do plugin
require_once(PLUGIN_PATH."core/functions.install.php");

mmd_uninstall_hook();

?>