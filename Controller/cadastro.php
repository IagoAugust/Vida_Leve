<?php

  if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['cpf']) && !empty($_POST['email']) ){
    
    require_once('../model/conexao.php');

    $nome = $_POST["nome"];
    $senha = md5($_POST["senha"]);
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];

    $sql = "INSERT 
              INTO usuario
                   ( nome, email, cpf, telefone, cargo, senha) 
            VALUES ('$nome','$email','$cpf', null, 'al', '$senha')";

    echo
      "<script>
        alert('Cadastro efetuado com sucesso');
        location.href='../index.html';
      </script>";

    if(!mysqli_query($conn,$sql)){
        $_SESSION['mensagem'] = ("Deu Erro -- ".mysqli_errno($conn)." -> ". mysqli_error($conn));
        echo"<script>alert('{$_SESSION['mensagem']}');
        location.href='../view/html/cadastro.html';</script>";
    }
    
  }else{
    // header('Location: ../view/html/cadastro.html');
    echo"
      <script>
        alert('Cadastro não foi efetuado, tente novamente');
        location.href='../view/html/cadastro.html';
      </script>";
    
  }





  // $sql = "SELECT * FROM usuario";


  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //     echo "nome: " .$row["Nome"]."<br>";
  //   }
  // } else {
  //   echo "0 results";
  // }
?>