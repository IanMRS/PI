<?php
  include "conexao_BD.inc";

  extract($_POST);

    if($conexao){
        

        $sql = "INSERT INTO `cores`(`Nome`, `SIAPE`, `E-mail`, `Usuario`, `Senha`, `Coordenacao`) VALUES ('$nome','$siap','$email','$usuario','$senha','$coo')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = 'tela_inicial.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);

?>