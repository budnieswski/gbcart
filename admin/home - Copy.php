<div class="wrap">
 <h2>Cupons de Desconto</h2>

  <form action="" method="get">
  <p class="search-box">
    <label class="screen-reader-text" for="user-search-input">Pesquisar Usuários:</label>
    <input type="search" id="user-search-input" name="s" value="">
    <input type="submit" name="" id="search-submit" class="button" value="Pesquisar Usuários">
  </p>

  <table class="wp-list-table widefat fixed users">
    <thead>
      <tr>
        <th scope="col" id="cb" class="manage-column column-cb check-column" style="">
          <label class="screen-reader-text" for="cb-select-all-1">Selecionar todos</label>
          <input id="cb-select-all-1" type="checkbox">
        </th>
        <th scope="col" id="username" class="manage-column column-username sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=login&amp;order=asc">
            <span>Nome de Usuário</span><span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" id="name" class="manage-column column-name sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=name&amp;order=asc">
            <span>Nome</span>
            <span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" id="email" class="manage-column column-email sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=email&amp;order=asc">
            <span>Email</span>
            <span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" id="role" class="manage-column column-role" style="">Função</th>
        <th scope="col" id="posts" class="manage-column column-posts num" style="">Posts</th>
      </tr>
    </thead>

    <tfoot>
      <tr>
        <th scope="col" class="manage-column column-cb check-column" style="">
          <label class="screen-reader-text" for="cb-select-all-2">Selecionar todos</label>
          <input id="cb-select-all-2" type="checkbox">
        </th>
        <th scope="col" class="manage-column column-username sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=login&amp;order=asc">
            <span>Nome de Usuário</span>
            <span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" class="manage-column column-name sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=name&amp;order=asc">
            <span>Nome</span>
            <span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" class="manage-column column-email sortable desc" style="">
          <a href="http://localhost/agencia/testes/wp-admin/users.php?orderby=email&amp;order=asc">
            <span>Email</span>
            <span class="sorting-indicator"></span>
          </a>
        </th>
        <th scope="col" class="manage-column column-role" style="">Função</th>
        <th scope="col" class="manage-column column-posts num" style="">Posts</th>
      </tr>
    </tfoot>

    <tbody id="the-list" data-wp-lists="list:user">    
      <tr id="user-1" class="alternate">
        <th scope="row" class="check-column">
          <label class="screen-reader-text" for="cb-select-1">Selecionar admin</label>
          <input type="checkbox" name="users[]" id="user_1" class="administrator" value="1">
        </th>
        <td class="username column-username">
          <img alt="" src="http://0.gravatar.com/avatar/e93e1664d6e94f2cd58acb60ba820f21?s=32&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
          <strong>
            <a href="http://localhost/agencia/testes/wp-admin/profile.php?wp_http_referer=%2Fagencia%2Ftestes%2Fwp-admin%2Fusers.php">admin</a>
          </strong>
          <br>
          <div class="row-actions">
            <span class="edit">
              <a href="http://localhost/agencia/testes/wp-admin/profile.php?wp_http_referer=%2Fagencia%2Ftestes%2Fwp-admin%2Fusers.php">Editar</a>
            </span>
            <span class="edit">
              <a href="http://localhost/agencia/testes/wp-admin/profile.php?wp_http_referer=%2Fagencia%2Ftestes%2Fwp-admin%2Fusers.php"> Ediaatar</a>
            </span>
          </div>
        </td>
        <td class="name column-name"> </td>
        <td class="email column-email"><a href="mailto:desenvolvimento@muitomaisdigital.com.br" title="Email: desenvolvimento@muitomaisdigital.com.br">desenvolvimento@muitomaisdigital.com.br</a></td>
        <td class="role column-role">Administrador</td>
        <td class="posts column-posts num"><a href="edit.php?author=1" title="Ver posts desse autor" class="edit">6</a></td>
      </tr>
    </tbody>
  </table>

  <div class="tablenav bottom">
    //
  </div>
</form>

</div>