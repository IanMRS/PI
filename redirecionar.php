<?php
    extract($_POST);

    if(isset($DOCENTE)){
        $var = 'DOCENTE';
    } elseif(isset($DISCENTE)){
        $var = 'DISCENTE';
    } elseif(isset($CORES)){
        $var = 'CORES';
}
    header('Location: '.$var.'/');
    exit;
?>