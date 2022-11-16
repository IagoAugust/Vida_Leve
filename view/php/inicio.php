<?php
  session_start();  
  // phpinfo()
  require_once('../../model/conexao.php');
  require_once('../../Controller/listarPaciente.php');

  if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  if(isset($_SESSION['idPaciente'])){
    unset($_SESSION['idPaciente']);
  }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vida Leve</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/inicio.css"/>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <header class="container pc" ">
    <div class="nome-pagina">
      <p>Vida Leve</p>
    </div>
    <div class="perfil" >
      <div id="selecionar-aba" >
        <p>
          <?php
            echo ($_SESSION['nome']); 
          ?>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 15l-4.243-4.243 1.415-1.414L12 12.172l2.828-2.829 1.415 1.414z"/></svg>
      
        <div class="aba" onmouseleave="sairMenu()">
          <ul>
            <li><a href="#">Configuração</a></li>
            <li><a href="../../index.html">Sair</a></li>
          </ul>
        </div>
      </div>
      
      <img src="../img/icone-adm.jpeg" />
    </div>
  </header>
  <header class="container mobile">
    <div class="nome-pagina">
      <p>Início</p>
    </div>

    <div class="menu ">
      <ul>
        <li><a class="perfil-mobile" href="#"><h2>Prof Bagulho</h2> <img src="../img/icone-adm.jpeg"> </a></li>
        <li><a href="#">Configuração</a></li>
        <li><a href="../../index.php">Sair</a></li>
      </ul>
    </div>

    <button id="btnHamburger" class="hamburger">
      <i class="menuIcon material-icons selecionadoIcon">menu</i>
      <i class="closeIcon material-icons ">close</i>
    </button>

    
  </header>

  <div class="box-geral">
    <div class="pesquisa">
      <div>
        <a href="../html/cadastroPaciente.html">Novo Cadastro</a>
      </div>
      <form>
        <span class="material-symbols-outlined md-48"> search </span>
        <input type="search" placeholder="Pesquisa" />
        <input type="submit" value="Buscar" />
      </form>
    </div>
    <div class="clear"></div>
    <div class="lista">
      <h2>Pacientes</h2>
      <div class="box-elementos">
        <table class="" cellspacing="0">
          <thead>
            <th>Pacientes</th>
            <th>Última Visita</th>
            <th>CPF</th>
            <th>Status</th>
          </thead>
          <tbody>
            <?php
               if(mysqli_num_rows($retornoBdPaciente) != 0)
               {
             
                 while($linhaPaciente = mysqli_fetch_assoc($retornoBdPaciente))
                 {
            ?>
              <tr>
              <td>
                <div class="paciente" >
                  <img src="../<?php echo $linhaPaciente['path']?>" />
                  <a href="./pacientePrincipal.php?id=<?php echo $linhaPaciente['id_paciente']?>">
                    <div>
                      <h3><?php echo ($linhaPaciente['nome']);?></h3>
                      <p><?php echo ($linhaPaciente['email']);?></p>
                    </div>
                  </a>
                </div>
              </td>

              <td>
                <div class="visita">
                  <h3>29 de Setembro, 2022</h3>
                  <p>Dois dias há atrás</p>
                </div>
              </td>

              <td>
                <div class="dados">
                  <p><?php
                  // echo($linhaPaciente['cpf']); 
                  $bloco_1 = substr($linhaPaciente['cpf'],0,3);
                  $bloco_2 = substr($linhaPaciente['cpf'],3,3);
                  $bloco_3 = substr($linhaPaciente['cpf'],6,3);
                  $dig_verificador = substr($linhaPaciente['cpf'],-2);
                  $cpfFormatado = $bloco_1.".".$bloco_2.".".$bloco_3."-".$dig_verificador;
                  echo($cpfFormatado)
                   ?></p>
                </div>
              </td>

              <td>
                <div class="status">
                  <p class="status-ativo">Ativo</p>
                </div>
              </td>
            </tr>
            <?php
                 }
                   
               }else{
                   echo("Não tem nenhum paciente");
               }
            ?>
            <tr>
              <td>
                <div class="paciente" >
                  <img src="../img/foto-paciente.jpg" />
                  <a href="./pacientePrincipal.html">
                    <div>
                      <h3>nome</h3>
                      <p>logan@gmail.com</p>
                    </div>
                  </a>
                </div>
              </td>

              <td>
                <div class="visita">
                  <h3>29 de Setembro, 2022</h3>
                  <p>Dois dias há atrás</p>
                </div>
              </td>

              <td>
                <div class="dados">
                  <p>523.547.859-12</p>
                </div>
              </td>

              <td>
                <div class="status">
                  <p class="status-inativo">Inativo</p>
                </div>
              </td>
            </tr>
          </tbody>
            </table>
        <div class="elementos">
          <!-- <div class="box-paciente">
            <div class="titulo">
              <h2>Paciente</h2>
            </div>
                <div class="paciente">
                  <img src="../img/foto-paciente.jpg" />
                  <a href="./pacientePrincipal.html">
                    <div>
                      <h3>nome</h3>
                      <p>logan@gmail.com</p>
                    </div>
                  </a>
                </div>

            
          </div> -->
          <!-- box-paciente -->
          <!-- <div class="box-visita">
            <div class="titulo">
              <h2>Última Visita</h2>
            </div>
            <div class="visita">
              <h3>29 de Setembro, 2022</h3>
              <p>Dois dias há atrás</p>
            </div>

            <div class="visita">
              <h3>29 de Setembro, 2022 </h3>
              <p>Dois dias há atrás</p>
            </div>
          </div> -->
          <!-- box-visita -->

          <!-- <div class="box-dados">
            <div class="titulo">
              <h2>CPF</h2>
            </div>
            <div class="dados">
              <p>523.547.859-12</p>
            </div>

            <div class="dados">
              <p>523547859612</p>
            </div>
          </div> -->
          <!-- box-dados -->

          <!-- <div class="box-status">
            <div class="titulo">
              <h2>Status</h2>
            </div>
            <div class="status">
              <p class="status-ativo">Ativo</p>
            </div>

            <div class="status">
              <p class="status-inativo">Inativo</p>
            </div>
          </div> -->
          <!-- box-status -->
        </div>
        <!-- elementos -->
      </div>
    </div>
    
    
    <div class="proxima-pagina">
      <div class="flecha-esquerda">
        <span class="material-symbols-outlined flecha">
          keyboard_double_arrow_left
        </span>
      </div>
      <div class="numeros">
        <h2>1</h2>
        <h2>2</h2>
        <h2>3</h2>
      </div>
      <div class="flecha-direita">
        <span class="material-symbols-outlined flecha">
          keyboard_double_arrow_right
        </span>
      </div>
    </div>
  </div>
  <script src="../script.js"></script>
  <script src="../js/inicio.js"></script>
</body>

</html>