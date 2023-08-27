<?php

include "conexao_BD.inc";   

if($conexao){

 if(isset($_COOKIE["Login"])){
    $n1=$_GET["num"];
    $n2=$_COOKIE["Login"];

    if($n1 != $n2){
        echo "LOGIN NÃO EFETUADO";
        exit;
    };

    }else{
    echo "LOGIN nao existe";
    exit;
  }
}else{
    
    die("Erro na conexão: " . mysqli_connect_error());

}

  mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA PRINCIPAL</title>
</head>
<body>


    BEM VINDO(A) A TELA PRINCIPAL
        

</html>