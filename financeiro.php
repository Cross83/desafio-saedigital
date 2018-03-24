<?php include 'header.php';?>

  <div class="menuLateral">
    <?php include 'menuLateral.php';?>
  </div>

  <div class="conteudo">
    <div class="topo">
      <div class="title">
        <h4>Financeiro</h4>
        <p class="texto">Veja o valor arrecadados por espetáculo.</p>
      </div>
      <ul class="breadCrumb">
          <li><a href="./">Home</a></li>
          <li class="active"><span>Financeiro</span></li>
      </ul>
    </div>

    <div class="boxConteudo">
      
      <div class="painel registro">
        <div class="barraTit">Em Cartaz <span>(2)</span></div>
        <div class="boxTabela">
          <table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr class="tabTopo">
              <td class="col-md-6">Espetáculo</td>
              <td class="col-md-2" align="center">Reservados</td>
              <td class="col-md-2" align="center">Disponível</td>
              <td class="col-md-2" align="center">Valor Arrecadado</td>
            </tr>
            <tr>
              <td class="col-md-6"><a href="reserva.php">O Amor de Clotilde</a></td>
              <td class="col-md-2" align="center">16</td>
              <td class="col-md-2" align="center">26</td>
              <td class="col-md-2" align="center">R$ 380,16</td>
            </tr>
            <tr>
              <td class="col-md-6"><a href="reserva.php">Abrão o Pai de Multidões</a></td>
              <td class="col-md-2" align="center">16</td>
              <td class="col-md-2" align="center">26</td>
              <td class="col-md-2" align="center">R$ 380,16</td>
            </tr>
            <tr>
              <td class="col-md-6"><a href="reserva.php">Abrão o Pai de Multidões 2</a></td>
              <td class="col-md-2" align="center">16</td>
              <td class="col-md-2" align="center">26</td>
              <td class="col-md-2" align="center">R$ 380,16</td>
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