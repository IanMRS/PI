<?php
    extract($_POST);

    if(isset($CRIAR)){
        $var = 'CRIAR';
    } elseif(isset($ANTERIORES)){
        $var = 'ANTERIORES';
}
    header('Location: '.$var.'/');
    exit;
?>