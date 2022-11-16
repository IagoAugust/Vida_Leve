<?php
//error_reporting(0);

$servidor="localhost";
$usuario = "root";
$senha = "root";
$dbname="projeto";

  try{
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
  }
  catch (Exception $e){
    echo 'Exceção capturada: ',   $e->getMessage();
  }
  
?>