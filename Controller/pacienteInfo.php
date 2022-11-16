<?php
  // require_once ('../model/conexao.php');
  // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $id = $_SESSION['idPaciente'];

  if(!empty($id)){
    
    $sqlInfoPaciente = "SELECT a.id_paciente, a.nome, a.cpf, a.rg, a.profissao, a.dataNasc, a.email,a.imagem_id, a.nome, b.path FROM paciente a INNER JOIN	imagens b ON (a.imagem_id = b.idimagem) WHERE a.id_paciente = '$id' limit 1";


    $retornoInfoPaciente = mysqli_query($conn, $sqlInfoPaciente);
    $linha = mysqli_fetch_assoc($retornoInfoPaciente);

    $anoDeNascimento = substr($linha['dataNasc'],0,4);
    $anoAtual = date('Y');
    $idade =  $anoAtual - $anoDeNascimento;

  }else{
    $_SESSION['msg'] = "<p>Usuário não encontrado!</p>";
    header("Location: ./inicio.php");
  }




?>