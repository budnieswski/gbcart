<?php
/*
* @/core/functions.useful.php
*/

/*
* Retorna a URL (http) do arquivo requisitado
*/
if (!function_exists(mmd_url)) {

  function mmd_url($file, $path=GBC_PATH) {
    return plugins_url( $file, GBC_PATH );
  }

} // end IF (mmd_url)


/*
* retorna o HTTP do admin/plugin
*/
if (!function_exists(mmd_page_url)) {

  function mmd_page_url($page='admin/home.php') {
    return admin_url( 'admin.php?page=cupons_mmd/'.$page );
  }

} // end IF (mmd_page_url)

/*
* 
*/
if (!function_exists(mmd_msg_sucess)) {

  function mmd_msg_success($message) {
    printf( '<div class="updated"> <p> %s </p> </div>', esc_html__( $message, 'mmd_cupom' ) );
  }

} // end IF (mmd_msg_sucess)


/*
* 
*/
if (!function_exists(mmd_msg_error)) {

  function mmd_msg_error($message) {
    printf( '<div class="error"> <p> %s </p> </div>', esc_html__( $message, 'mmd_cupom' ) );
  }

} // end IF (mmd_msg_error)


?>