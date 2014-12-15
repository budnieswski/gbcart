<?php
/*
* @/core/functions.model.php
*/

/*
* Adicionar novo Cupom
*/
function mmd_model_add_cupom ($http) {
  if (empty($http['cupom_codigo']) || empty($http['cupom_valor'])) {
    mmd_msg_error("Error: Algum campo esta vazio.");
    return false;
  }

  $result = mmd_dao_add_cupom(
    array( 
      'codigo' => $http['cupom_codigo'], 
      'valor' => $http['cupom_valor'],
    )
    );

  if (!$result) {
    mmd_msg_error("Error: Nao foi possivel adicionar o cupom, tente novamente.");
    return false;
  }
  
  mmd_msg_success("Cupom adicionado com sucesso !");
}


/*
* Lista todos os cupons
*/
function mmd_model_list_cupom () {
  $list = mmd_dao_list_cupom();

  if (empty($list)) {
    mmd_msg_error("Error: Nao foi possivel carregar os cupons");
    return false;
  }
  
  return $list;
}


/*
* Remove um cupom
*/
function mmd_model_remove_cupom ($cupom_id) {
  $remover = mmd_dao_remove_cupom($cupom_id);

  if ($remover == false) {
    mmd_msg_error("Error: Nao foi possivel remover o cupom");
    return false;
  }
  
  mmd_msg_success("O Cupom foi removido com sucesso");
}


?>