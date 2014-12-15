<?php
/*
* @/core/functions.dao.php
*/

/*
* Adicionar novo Cupom
*/
function mmd_dao_add_cupom($data) {
  global $wpdb;
  return $wpdb->insert( 
    MMD_CUPOM_TABLE, 
    $data
  );
}

/*
* Lista todos os cupons
*/
function mmd_dao_list_cupom() {
  global $wpdb;
  return $wpdb->get_results( 'SELECT * FROM '.MMD_CUPOM_TABLE, OBJECT );
}

/*
* Remove um cupom
*/
function mmd_dao_remove_cupom ($cupom_id) {
  global $wpdb;
  $result = $wpdb->query( 
    $wpdb->prepare( 
      "
      DELETE FROM ".MMD_CUPOM_TABLE."
      WHERE id = %d
      ",
      $cupom_id
    )
  );

  if ($result==0) {
    return false;
  }  

  return true;
}

?>