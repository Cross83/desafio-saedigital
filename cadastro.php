<?php include 'header.php';?>

  <div class="menuLateral">
    <?php include 'menuLateral.php';?>
  </div>

  <div class="conteudo">
    <div class="topo">
      <div class="title">
        <h4>Cadastro</h4>
        <p class="texto">Cadastre seu espetáculos</p>
      </div>
      <ul class="breadCrumb">
          <li><a href="./">Home</a></li>
          <li class="active"><span>Cadastro</span></li>
      </ul>
    </div>

    <div class="boxConteudo">
      <div class="painel cadastro">

        <div class="barraTit">Novo cadastro</div>

        <div class="boxTabela">
          <form action="" method="POST">
            <div class="form-group">
              <label for="">Nome do espetáculo</label>
              <input class="form-control" type="text" name="" id="">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input checked="checked" name="active" type="checkbox" value="1">
                        Esta peça está ativa!
                    </label>
                </div>
            </div>
            <div class="btSalvar"><button id="salvar" type="submit" class="btn btn-primary btn-save">Salvar</button></div>
          </form>
        </div>
      </div>
      

      <div class="painel busca">
        <div class="barraTit">Busca <span><input class="form-control" type="text" name="" id=""> <button type="button" class="fa fa-search"></button></span></div>
      </div>
      
      <div class="painel registro">
        <div class="barraTit">Em Cartaz <span>(2)</span></div>
        <div class="boxTabela">
          <table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr class="tabTopo">
              <td class="col-md-8">Nome</td>
              <td class="col-md-2 hidden-xs" align="center">Status</td>
              <td class="col-md-2" align="center">Ação</td>
            </tr>
            <tr>
              <td class="col-md-8">O Amor de Clotilde</td>
              <td class="col-md-2 hidden-xs" align="center">Ativo</td>
              <td class="col-md-2" align="center">
                  <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i><span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-pencil-square-o"></i>Editar</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-trash-o"></i>Excluir</a></li>
                      </ul>
                  </div>
              </td>
            </tr>
            <tr>
              <td class="col-md-8">Abrão o Pai de Multidões</td>
              <td class="col-md-2 hidden-xs" align="center">Ativo</td>
              <td class="col-md-2" align="center">
                  <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i><span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-pencil-square-o"></i>Editar</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-trash-o"></i>Excluir</a></li>
                      </ul>
                  </div>
              </td>
            </tr>
            <tr class="desativada">
              <td class="col-md-8">Abrão o Pai de Multidões 2</td>
              <td class="col-md-2 hidden-xs" align="center">Desativada</td>
              <td class="col-md-2" align="center">
                  <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i><span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-pencil-square-o"></i>Editar</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-trash-o"></i>Excluir</a></li>
                      </ul>
                  </div>
              </td>
            </tr>
          </table>
        </div>
      </div>

    </div>

    <footer>
      <div class="footer-copy">
          © 2018 <strong>Bernardo Osternack</strong>
      </div>
    </footer>
  </div>

</body>
</html>