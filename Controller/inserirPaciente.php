<?php
  if(isset($_FILES['imagem'])){
    require_once ('../model/conexao.php');

    $id = $_POST['id'];
    $imagem = $_FILES['imagem'];
  
    if($imagem['error']){
      die("Falha ao enviar arquivo");
    }

    $pasta = "../view/img/imagensPaciente/";
    $nomeDoArquivo = $imagem['name'];
    $novoNomeDoArquivo = uniqid();
    echo $novoNomeDoArquivo;
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));


    if ($extensao != 'jpg' && $extensao != 'png'){
      die("Tipo de arquivo não aceito");
    }
    
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $uploadImagem = move_uploaded_file($imagem["tmp_name"], $path);

    
    if ($uploadImagem){

      $sqlImagens = "INSERT INTO imagens (nome, path ) VALUES('$nomeDoArquivo', '$path')";
      if(!mysqli_query($conn,$sqlImagens)){
        $_SESSION['mensagem'] = ("Deu Erro -- ".mysqli_errno($conn)." -> ". mysqli_error($conn));
        // echo"<script>alert('{$_SESSION['mensagem']}');
        // location.href='../view/html/cadastro.html';</script>";
      }
      
      echo "<p>Imagem Enviada com sucesso</p>";
      
    }else{
      echo "Falta ao enviar arquivo";
    }

  }
?>