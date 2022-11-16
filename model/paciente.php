<?php

  // require_once('./conexao.php');

// seleciona a base de dados em que vamos trabalhar
// mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
// $query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
// executa a query
// $dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
// $linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
// $total = mysql_num_rows($dados);

  $sql = " SELECT nome, cpf, rg, profissao, dataNasc, img_paciente FROM paciente";

  try 
  {
    $retornoBd = mysqli_query($conn, $sql);
  }
  catch(Exception $e){
      echo $e->getMessage();
  }

  if(mysqli_num_rows($retornoBd) != 0)
  {

    while($linha = mysqli_fetch_assoc($retornoBd))
    {
      // print_r($linha);
      // print_r("<br>");
      
      echo "<p>O nome do paciente é {$linha['nome']} sua profissão é de {$linha['profissao']} </p><br>";
    }
      
  }else{
      echo("Não tem nenhum paciente");
  }


?>