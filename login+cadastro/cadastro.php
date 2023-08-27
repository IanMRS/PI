<?php
  include "conexao_BD.inc";

  extract($_POST);

if($conexao){
    
    if($nome != '' && $usuario != '' && $senha != ''  ){

        $sql = "INSERT INTO `bd_dados`(`nome`, `usuario`, `senha`) VALUES ('$nome','$usuario','$senha')";
        $res=mysqli_query($conexao, $sql);

        echo "Cadastro relalizado com sucesso";
        echo "<a href = 'tela_login.html'> fazer login </a>";

    }else{
        echo "ERRO NO LOGIN: vc nao cadastrou todos os dados";
        echo "<a href = 'tela_cadastro.html'> voltar cadastro </a>";
    }
}else{

    die("Erro na conexão: " . mysqli_connect_error());

}
 


  mysqli_close($conexao);

?>