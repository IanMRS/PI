
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

   
  <?php

      if(isset($_COOKIE["Login"])){
        $n1=$_GET["num"];
        $n2=$_COOKIE["Login"];

        if($n1 != $n2){
            echo "LOGIN NÃO EFETUADO";
            exit;
        }
        
      }else{
        echo "LOGIN nao existe";
        exit;
      }

      include "conexao_bd.inc";
      echo "oi pedro";

      mysqli_close($conexao);

?>
 </body>   

</html>
        