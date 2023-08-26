<?php
  include "conexao_bd.inc";

  extract($_POST);

  $sql = "SELECT * FROM cadastro WHERE Usuario='$usuario' AND Senha=$senha ";
  $res=mysqli_query($conexao, $sql);
  $linha=mysqli_affected_rows($conexao);

  if($linha > 0){
    $num = rand(100000,900000);
    setcookie("Login",$num);
    header("Location: tela.php?num=$num");

  }else{
    echo "ERRO NO LOGIN";
    echo "<a href = 'login.html'> voltar </a>";
  }


  mysqli_close($conexao);

?>
