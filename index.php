<?php include 'conexao/conexao.php'; ?>
<?php 
    $situacao = $_GET['sit'];

    switch ($situacao) {
        case "ERRO-cadastro":
            echo "<script> alert('ERRO: Não foi possível realizar o cadastro, falta informação. '); </script>";
            break;
        case "OK-cadastro":
            echo "<script> alert('Cadastro realizado com sucesso.'); </script>";
            break;
        case "excluido":
            echo "<script> alert('Produto exluido do sistema.'); </script>";
            break;
        case "OK-atualizar":
            echo "<script> alert('Produto atualizado com sucesso.'); </script>";
            break;
        case "ERRO-atualizar":
            echo "<script> alert('ERRO: Não foi possível atualizar o produto, código não encontrado.'); </script>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tudo Para a Obra</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>

    <?php
        $busca=mysqli_query($conecta, "SELECT * FROM tbl_produtos ")
        
    ?>
    <body>
        <div id="principal">
            <div id="topo"></div>
            <div id="conteudo" class="container-fluid" style="padding:15px; width: 1200px;">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Cód</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Valor</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalNovoProduto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/></svg> Novo Registro</button></th>
                        <?php include "includes/modal_novo.php"; ?>    
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($linha=mysqli_fetch_assoc($busca)){ ?>
                            <tr> 
                            <?php echo "<th scope='row'>" . $linha["prod_id"] . "</th>" ?>
                            <?php echo "<th>" . $linha["prod_nome"] . "</th>" ?>
                            <?php echo "<th>" . $linha["prod_marca"] . "</th>" ?>
                            <?php echo "<th> R$ " . $linha["prod_valor"] . "</th>" ?>
                            <th style="padding: 5px;"><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalVisualizarProduto<?php echo $linha["prod_id"]; ?>">Visualizar</button></th>
                            <th style="padding: 5px;"><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalEditarProduto<?php echo $linha["prod_id"]; ?>">Editar</button></th>
                            <th style="padding: 5px;"><a href="excluir_produto.php/?id=<?php echo $linha["prod_id"]; ?>" type="button" class="btn btn-outline-danger">Excluir</button></th>                   
                        </tr>
                        
                    </tbody>
                    <?php include "includes/modal_visualizar.php"; ?>
                    <?php include "includes/modal_editar.php"; ?>
                    <?php } ?>
                </table>
            </div>
            <div id="rotape"></div>
        </div>
    </body>
</html>