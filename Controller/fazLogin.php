<?php

  session_start();

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) ){
    
    require_once('../model/conexao.php');

    $senha = md5($_POST["senha"]); // Não esta funcioando por que md5 noa no banco
    // $senha = $_POST["senha"];
    $email = mysqli_real_escape_string($conn,$_POST["email"]);

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $_POST["senha"];


    $sql = "SELECT * FROM usuario
            WHERE email = '$email' AND senha = '$senha'";

    try 
    {
        $retornoBd = mysqli_query($conn, $sql);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

    if(mysqli_num_rows($retornoBd) != 0)
    {
        // while($linha = mysqli_fetch_array($retornoBd))
        while($linha = mysqli_fetch_assoc($retornoBd))
        {
           $_SESSION['nome'] = $linha['nome'];
           $_SESSION['id'] = $linha['id_usuario'];
        }
       // header('Location:../view/areainterna.php?id='.$linha['id']);
      //  header('Location:../view/php/inicio.php?nome='.$_SESSION['nome']);
       header('Location:../view/php/inicio.php');
    }else{
        //echo("Erro ao encontrar o usuario");
        $_SESSION['mensagem'] = "Usuário e Senha Inválido";
        // header('Location:../index.php');
        echo"<script>alert('{$_SESSION['mensagem']}');
        location.href='../index.html';</script>";
    }
    mysqli_close($conn);
   
    
  }else{
    header('Location: ../index.html');
  }

?>