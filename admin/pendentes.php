<div class="wrap">
 <h2>Adicionar Cupom</h2>

<?php
if (!empty($_POST)) {
  mmd_model_add_cupom($_POST);
}
?>

<form action="" method="post">
  <table class="form-table">
    <tbody>

      <tr>
        <th scope="row">
          <label for="cupom_codigo">Codigo Cupom</label>
        </th>       
        <td>
          <input type="text" value="" id="cupom_codigo" name="cupom_codigo">
        </td>
      </tr>

      <tr>
        <th scope="row">
          <label for="cupom_valor">Desconco de</label>
        </th>       
        <td>
          <input type="text" value="" id="cupom_valor" name="cupom_valor"> %
          <br>
          <span class="description">Porcentagem, de 1 a 100</span>
        </td>
      </tr>

      </tbody>
  </table>
  <p class="submit"><input type="submit" value="Adicionar" class="button-primary" name="Submit"></p>
</form>

</div>