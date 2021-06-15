<div role="tabpanel" class="tab-pane active" id="dados_pessoais">
    <div style="padding-top:20px;">
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name='nome' class="form-control" id="nome"
                           placeholder="Nome Completo" value="<?php if (isset($_SESSION['nome'])) {
                        echo $_SESSION['nome'];
                    }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" name='cpf' class="form-control" id="cpf" placeholder="CPF"
                           value="<?php if (isset($_SESSION['cpf'])) {
                               echo $_SESSION['cpf'];
                           } ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
