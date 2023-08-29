<?php

    extract($_POST);

    $queryString = http_build_query(array('usuario' => $usuario, 'senha' => $senha));

    if(strlen($usuario) == 7){
        header("Location: login_doscente.php?$queryString");

    }else if(strlen($usuario) == 12){
        header("Location: login_discente.php?$queryString");

    }else if(strlen($usuario) == 9){
        header("Location: login_cores.php?$queryString");
        
    }else{
        echo "senha invalida";
    }


?>
