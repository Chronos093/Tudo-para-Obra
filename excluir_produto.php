<?php 
    include 'conexao/conexao.php'; 

    $id = $_GET['id'];

    echo $id;

    mysqli_query($conecta, "DELETE FROM tbl_produtos WHERE prod_id = " . $id . "");

    header("Location: http://localhost/tudo-para-obra/?sit=excluido");

?>
