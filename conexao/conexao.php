<?php
    $banco="tudo-para-obra";
    $host="127.0.0.1";
    $usuario="mysql";
    $senha="mysql";

    $conecta = mysqli_connect($host, $usuario, $senha, $banco);

    if(!$conecta){
        echo"Erro ao conectar no banco, contacte o suporte.";
    }
?>
