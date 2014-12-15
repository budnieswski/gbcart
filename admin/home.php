<div class="wrap">
  <h2> Todos os Pedidos </h2>
  
  <?php
  if ($_GET['mmd']=='remover' && !empty($_GET['cupom_id'])) {
    mmd_model_remove_cupom($_GET['cupom_id']);
  }
  ?>
  
  <?php $url_remove = mmd_page_url().'&mmd=remover&cupom_id='; ?>
  <?php $cupons = mmd_model_list_cupom(); ?>
  <?php if (!empty($cupons)): ?>

  <form action="" method="get">
    <table class="wp-list-table widefat fixed users">
      <thead>
        <tr>
          <th scope="col" id="cupom_codigo" class="manage-column column-cupom_codigo sortable desc" style="">
            <a href="#"> <span>Codigo Cupom</span> </a>
          </th>
          <th scope="col" id="cupom_valor" class="manage-column column-cupom_valor sortable desc" style="">
            <a href="#"> <span>Valor Desconto</span> </a>
          </th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <th scope="col" class="manage-column column-cupom_codigo sortable desc" style="">
            <a href="#"> <span>Codigo Cupom</span> </a>
          </th>
          <th scope="col" class="manage-column column-cupom_valor sortable desc" style="">
            <a href="#"> <span>Valor Desconto</span> </a>
          </th>
        </tr>
      </tfoot>

      <tbody id="the-list" data-wp-lists="list:user"> 
        <?php foreach ($cupons AS $cupom): ?>   
        <tr id="cupom-<?php echo $cupom->id ?>" class="alternate">
          <td class="cupom_codigo column-cupom_codigo"> <?php echo $cupom->codigo ?>

          <div class="row-actions">
            <span class="remove"> <a href="<?php echo $url_remove.$cupom->id ?>">Remover</a> </span>
          </div>

          </td>
          <td class="cupom_valor column-cupom_valor"> <?php echo $cupom->valor ?> </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <div class="tablenav bottom"> </div>
  </form>
<?php endif; ?>

</div>