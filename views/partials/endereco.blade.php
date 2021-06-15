<div role="tabpanel" class="tab-pane" id="endereco">
    <div style="padding-top:20px;">
        <form class="form-horizontal" action="" id="frm-endereco" method="POST">
            <div class="form-group">
                <label class="col-sm-2 control-label">CEP</label>
                <div class="col-sm-10">
                    <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Logradouro</label>
                <div class="col-sm-10">
                    <input type="text" name="logradouro" id="logradouro" class="form-control"
                           placeholder="Endereço">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Número</label>
                <div class="col-sm-10">
                    <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Bairro</label>
                <div class="col-sm-10">
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Complemento</label>
                <div class="col-sm-10">
                    <input type="text" name="complemento" class="form-control" id="localidade"
                           placeholder="Complemento">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
                    {!! $ufs !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Município</label>
                <div class="col-sm-10">
                    <input type="text" name="municipio" class="form-control" id="municipio"
                           placeholder="Município">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tempo de Moradia</label>
                <div class="col-sm-10">
                    <input type="text" name="tempomoradia" class="form-control" id="tempomoradia"
                           placeholder="Tempo Moradia Município Atual">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Celular (Whats)</label>
                <div class="col-sm-10">
                    <input type="text" name="celular" class="form-control phone" id="celular"
                           placeholder="Celular">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Contato</label>
                <div class="col-sm-10">
                    <input type="text" name="contato" class="form-control" id="contato"
                           placeholder="Contato">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button type="button" class="btn btn-success btnPrevious">Anterior</button>
                    <button type="button" class="btn btn-success btnNext">Próximo</button>
                </div>
            </div>
        </form>
    </div>
</div>
