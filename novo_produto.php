<?php 
    include 'conexao/conexao.php'; 

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $data = date("Y-m-d");

    if (!empty($nome) && !empty($marca) && !empty($valor) && !empty($desc)){
        mysqli_query($conecta, "INSERT INTO tbl_produtos (prod_nome, prod_desc, prod_marca, prod_valor, prod_dataMod) VALUES ('$nome','$desc','$marca','$valor','$data');");
        header("Location: http://localhost/tudo-para-obra/?sit=OK-cadastro");
    } else{
        header("Location: http://localhost/tudo-para-obra/?sit=ERRO-cadastro"); 
    } 

?>
