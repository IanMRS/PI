<?php
  include "conexao_BD.inc";

  extract($_POST);

    if($conexao){
        

        $sql = "INSERT INTO `discente`(`Nome`, `E-mail(INST)`, `Curso`, `Turma`, `Telefone`, `Matricula`, `Senha`)  VALUES ('$nome','$email','$curso','$turma','$telefone','$matricula','$senha')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = 'tela_inicial.html'> fazer login </a>";

        
    }else{

        die("Erro na conexão: " . mysqli_connect_error());

    }
    


    mysqli_close($conexao);

?>