 <?php

    include "conexao_BD.inc";   

      if(isset($_COOKIE["Login"])){
        $n1=$_GET["num"];
        $n2=$_COOKIE["Login"];

        if($n1 != $n2){
            echo "LOGIN NÃO EFETUADO";
            exit;
        }else{
            header("Location: tela_principal.html?num=$num");

        }
        
      }else{
        echo "LOGIN nao existe";
        exit;
      }

     
      mysqli_close($conexao);
?>
