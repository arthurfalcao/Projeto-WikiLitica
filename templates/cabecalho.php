<div class="content" id="master">
  <nav>
    <?php if (isLogado()): ?>
      <a href="logout.php">Sair</a>
    <?php else: ?>
      <a href="login.php">Entrar</a> |
      <a href="cadastro.php">Criar Conta</a>
    <?php endif; ?>
  </nav>
  <div id="header">
    <a href="../index.php">
      <img  class="imagem"  src="../static/img/WikiLítica_logo.png" alt="logo" height="80px" width="270px">
    </a>
    <div class = "menuhorizontal" id = "menuhorizontal">
      <ul>
        <li><a href="mostrar_lista.php">Busca Avançada</a></li>
        <?php if (isLogado()){?>
        <li class="dropdown"><a href="#" class="dropbtn">Contribuir</a>
          <div class="dropdown-content">
          <?php if ($_SESSION['superuser'] == true){?>
            <a href="partido.php">Partidos</a>
            <a href="estado.php">Estado</a>
            <a href="municipio.php">Município</a>
          <?php }
            else{ ?>
            <a href="candidato.php">Candidatos</a>
          </div>
        </li>
      <?php }
        } ?>
        <li><a href="sobre.php">Sobre</a></li>
      </ul>
    </div>
  </div>
      <ul id="pesquisa">
        <li id="busca">
          <form action="#">
            <input type="text" name="busca" placeholder="Encontre na WikiLítica">
          </form>
          </li>
      </ul>
</div>
