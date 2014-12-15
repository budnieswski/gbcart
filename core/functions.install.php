<?php
/*
* @/core/functions.install.php
*/

/*
* Instalacao do Plugin
*/
if (!function_exists(gbc_install_hook)) {

  function gbc_install_hook() {
    #gbc_install_mysql();
    // add_option( 'gbc_opcao', 'valor_por_defeito' );
  }

} // end IF (gbc_install_hook)


/*
* Desistalacao do Plugin
*/
if (!function_exists(gbc_uninstall_hook)) {

  function gbc_uninstall_hook() {
    delete_option( 'gbc_opcao' );
  }

} // end IF (gbc_uninstall_hook)


/*
* Cria o menu na area Admin
*/
function gbc_install_menu() {
  /* http://codex.wordpress.org/Administration_Menus */

  // Pedidos
  add_menu_page( "Pedidos", "Pedidos", 10, "gbcart/admin/home.php", "", 'dashicons-cart', 23);

  // Pendentes
  add_submenu_page( "gbcart/admin/home.php", "Pedidos Pendentes", "Pendentes", 10, "gbcart/admin/pendentes.php");

  // Finalizados
  add_submenu_page( "gbcart/admin/home.php", "Pedidos Finalizados", "Finalizados", 10, "gbcart/admin/finalizados.php");
}


// Add script
function gbc_install_script() {
  wp_enqueue_script(
    'mmd_cupom', plugins_url('cupons_mmd/js/mmd_cupom.js'),
    array( 'scriptaculous' )
  );
}

/*
* Instal Database
*/
function gbc_install_mysql() {
  global $wpdb;

  $charset_collate = '';

  if ( ! empty( $wpdb->charset ) ) {
    $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
  }

  if ( ! empty( $wpdb->collate ) ) {
    $charset_collate .= " COLLATE {$wpdb->collate}";
  }

  $sql = "CREATE TABLE `".GBC_SQL_TABLE."` (
   `id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   `codigo` VARCHAR( 128 ) NOT NULL ,
   `valor` INT( 3 ) NOT NULL
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );

  add_option( 'gbc_db_version', GBC_SQL_TABLE_VERSION );
}

?>