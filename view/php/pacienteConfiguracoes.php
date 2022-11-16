<?php
  session_start();  
  // phpinfo()
  require_once('../../model/conexao.php');
  require_once('../../Controller/listarPaciente.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vida Leve</title>
  <link rel="stylesheet" href="/view/style.css" />
  <!-- <link rel="stylesheet" href="/view/inicio.css" /> -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="/view/CadastroPaciente.css" />
</head>

<body>
  <div>
    <header class="container">
      <div class="nome-pagina">


        <a class="icone-voltar" href="/view/inicio.html">

          <span class="material-symbols-outlined"> arrow_back </span>
          Voltar
        </a>

        <p>Vida Leve</p>
      </div>
      <div class="perfil">
        <p>Iago</p>
        <!-- Mudar para o nome do professor no Banco de dados -->
        <img src="./img/icone-user.jpg" alt="Icone de perfil preto e cinza" />
      </div>
    </header>

    <div class="containerCadastro">
      <form>



        <div class="informacoesPessoais">

          <div class="imagem ">
            <label for="imagem">Selecione sua imagem</label>
            <input type="file" name="imagem" />
          </div>

          <div class="informacaoEssenciais sessaoConteudo">
            <h2 class="w100">Informações Essenciais </h2>

            <div class="descricao w50">
              <label for="nome">Nome</label>
              <input type="text" name="nome" placeholder="Logan">
            </div>
            
            <div class="descricao w50">
              <label for="email">E-mail</label>
              <input type="email" name="email" placeholder="logan@hotmail.com">
            </div>

            <div class="descricao w20 telefone">
              <label for="telefone">Telefone</label>
              <input type="tel" name="telefone" placeholder="19 9999-8888">
            </div>

            <div class="descricao w20 estadoCivil">
              <label for="estadoCivil">EstadoCivil</label>
              <input type="text" name="estadoCivil" placeholder="Solteiro">
            </div>

            <div class="descricao w10 dataNascimento ">
              <label for="dataNascimento">Data Nascimento</label>
              <input type="date" name="dataNascimento">
            </div>

            <div class="descricao w10 idade">
              <label for="idade">Idade</label>
              <input type="number" name="idade" placeholder="19">
            </div>

            <div class="descricao w10 sexo">
              <label for="sexo">Sexo</label>
              <input type="text" name="sexo" placeholder="Masculino">
            </div>

            <div class="descricao w50">
              <label for="cpf">CPF</label>
              <input type="number" name="cpf" placeholder="123.456.789-10">
            </div>

            <div class="descricao w50">
              <label for="rg">RG</label>
              <input type="text" name="rg" placeholder="1234567">
            </div>

            <div class="descricao">
              <label for="uf">UF</label>
              <input type="text" name="uf" placeholder="MG">
            </div>

            <div class="descricao">
              <label for="naturalidade">Naturalidade</label>
              <input type="text" name="naturalidade" placeholder="Araçauca da Terra">
            </div>

            <div class="descricao">
              <label for="cor">Cor</label>
              <input type="text" name="cor" placeholder="Branco">
            </div>

          </div>

          <div class="informacoesEndereco sessaoConteudo">
            <h2 class="w100">Endereço</h2>

            <div class="descricao">
              <label for="cep">CEP</label>
              <input type="number" name="cep">
            </div>

            <div class="descricao">
              <label for="municipio">Município</label>
              <input type="text" name="municipio">
            </div>

            <div class="descricao">
              <label for="uf">UF</label>
              <input type="text" name="uf">
            </div>

            <div class="descricao">
              <label for="rua">Rua</label>
              <input type="text" name="rua">
            </div>

            <div class="descricao">
              <label for="numero">Numero</label>
              <input type="number" name="numero">
            </div>

            <div class="descricao">
              <label for="bairro">Bairro</label>
              <input type="text" name="bairro">
            </div>

            <div class="descricao">
              <label for="observacao">Observação</label>
              <input type="text" name="observacao">
            </div>
          </div>

          <div class="informacoesFamiliar sessaoConteudo ">
            <h2 class="w100">Familiar</h2>
            <div class="containerFilho descricao">

              <p>Você possui filhos?</p>
              <input type="radio" name="filhos" value="Nao">
              <label for="filhos">Não</label>

              <input type="radio" name="filhos" value="Sim">
              <label for="filhos">Sim</label>


              <label for="quantidadeFilhos">Quantidade de filhos?</label>
              <input type="number" name="quantidadeFilhos">

            </div>

            <div class="descricao">
              <label for="rendaFamiliar">Renda Familiar</label>
              <input type="number" name="rendaFamiliar">
            </div>

            <div class="descricao">
              <label for="locomocao">Locomoção</label>
              <input type="text" name="locomocao">
            </div>
          </div>


        </div>


        <div class="informacoesPrincipais sessaoConteudo">
          <h2 class="w100">Geral</h2>
          <div class="containerTrabalho descricao ">
            <p>Você trabalha?</p>
            <input type="radio" name="trabalha" value="Nao">
            <label for="trabalha">Não</label>

            <input type="radio" name="trabalha" value="Sim">
            <label for="trabalha">Sim</label>


            <label for="profissao">Qual é a Profissão</label>
            <input type="text" name="profissao">

            <label class="cargaHoraria" for="cargaHoraria">Carga Horaria Diária</label>
            <input type="number" name="cargaHoraria">


            <p>O seu trabalho deixa você mais sedentário</p>
            <input type="radio" name="sedentario" value="Nao">
            <label for="sedentario">Não</label>

            <input type="radio" name="sedentario" value="Sim">
            <label for="sedentario">Sim</label>

          </div>

          <div class="descricao">
            <label for="religiao">Religião</label>
            <input type="text" name="religiao">
          </div>

          <div class="descricao">
            <label for="habito">Habitos</label>
            <input type="text" name="habito">
          </div>

          <div class="containerFuma descricao">

            <p>Você Fuma?</p>
            <input type="radio" name="fuma" value="Nao">
            <label for="fuma">Não</label>

            <input type="radio" name="fuma" value="Sim">
            <label for="fuma">Sim</label>


            <label for="quantidade">Quantidade diária</label>
            <input type="number" name="quantidade">

          </div>

          <div class="descricao">
            <label for="bebidaalcoolica">Qual sua frequência do uso de bebida alcoólica?</label>
            <input type="text" name="bebidaalcoolica">
          </div>
        </div>

      </form>


    </div>

  </div>

  <script src="./cadastroPaciente.js"></script>
</body>

</html>