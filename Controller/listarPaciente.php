<?php

  // $sqlPaciente = " SELECT a.nome, a.cpf, a.rg, a.profissao, a.dataNasc, a.email FROM paciente ";

  $sqlPaciente = "SELECT a.id_paciente, a.nome, a.cpf, a.rg, a.profissao, a.dataNasc, a.email,a.imagem_id, a.nome, b.path FROM paciente a INNER JOIN	imagens b ON (a.imagem_id = b.idimagem)";

  try 
  {
    $retornoBdPaciente = mysqli_query($conn, $sqlPaciente);
    // $retornoBdImagem = mysqli_query($conn, $sqlImagem);
  }
  catch(Exception $e){
      echo $e->getMessage();
  }

  // $linha = mysqli_fetch_assoc($retornoBd)

  // if(mysqli_num_rows($retornoBd) != 0)
  // {

  //   while($linha = mysqli_fetch_assoc($retornoBd))
  //   {
  //     // print_r($linha);
  //     // print_r("<br>");
      
  //     echo "<p>O nome do paciente é {$linha['nome']} sua profissão é de {$linha['profissao']} </p><br>";
  //   }
      
  // }else{
  //     echo("Não tem nenhum paciente");
  // }


?>