<header class="cabecalho container">
      <div class="nome-pagina">

        <button id="btnHamburger" class="hamburger">
          <div class="containerMenuMobile">
              <a id="icone-volar-mobile" class="menu-voltar-mobile " href="./inicio.php">
                <span class="icone-fechar material-symbols-outlined"> arrow_back </span>
                <span>Voltar</span>
              </a>
  
             <i class="menuIcon material-icons selecionadoIcon">menu</i>
              <i class="closeIcon material-icons ">close</i>
            </div>
          </button>

        <a class="icone-voltar" href="./inicio.php">
          <span class="material-symbols-outlined"> arrow_back </span>
          <span>Voltar</span>
        </a>

        
      </div>
      <div class="perfil">
        <p><?php echo ($_SESSION['nome']);?></p>

        <img src="../img/icone-adm.jpeg" alt="Icone de perfil preto e cinza" />
      </div>
    </header>