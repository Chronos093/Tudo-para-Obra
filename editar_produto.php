<?php 
    include 'conexao/conexao.php'; 

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $data = date("Y-m-d");

    if (!empty($cod)){
        mysqli_query($conecta, "UPDATE tbl_produtos SET prod_nome='$nome', prod_desc='$desc', prod_marca='$marca', prod_valor='$valor', prod_dataMod='$data' WHERE prod_id='$cod';");
        header("Location: http://localhost/tudo-para-obra/?sit=OK-atualizar");
    } else{
        header("Location: http://localhost/tudo-para-obra/?sit=ERRO-atualizar"); 
    } 

?>
