<!-- Modal -->
<div class="modal fade" id="modalEditarProduto<?php echo $linha["prod_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modalProdutoLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="text-center modal-title" id="modalProdutoLabel"><b><?php echo $linha["prod_nome"];?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <form method="POST" action="editar_produto.php">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-2">
            <input type="text" readonly class="form-control-plaintext" name="cod" value="<?php echo $linha["prod_id"]; ?>" >
            </div>
            <?php $dataModalEditar = date("d/m/Y");  ?>
            <label class="col-sm-5 col-form-label">Data de Alteração</label>
            <div class="col-sm-3">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $dataModalEditar; ?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" name="nome" maxlength="58"  value="<?php echo $linha["prod_nome"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" name="marca" maxlength="23" value="<?php echo $linha["prod_marca"]; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" name="valor" value="R$ <?php echo $linha["prod_valor"]; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
            <textarea rows="15" class="form-control-plaintext" name="desc"><?php echo $linha["prod_desc"]; ?></textarea>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" >Enviar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
    </form>
    </div>
</div>
</div>

<!--Fim Modal-->
