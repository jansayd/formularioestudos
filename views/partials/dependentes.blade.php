<div role="tabpanel" class="tab-pane" id="dependentes">
    <div style="padding-top:20px;">
        <form class="form-horizontal" action="" onsubmit="return false;" method="POST">
            <div class="row text-right">
                <div class='col-md-12' style="margin-bottom: 20px">
                    <input type='button' id='btn_open_form_adicao_dependentes'
                           class='btn btn-primary'
                           value='Adicionar Dependente '/>
                </div>
            </div>

            <div class="modal" id="ModalFileUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Parentesco</label>
                                <div class="col-sm-10">
                                    <input type="text" name='parentesco' class="form-control" id="parentesco"
                                           placeholder="Grau Parentesco">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nome1' class="form-control" id="nome1"
                                           placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cpf1' class="form-control" id="cpf1" placeholder="CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input type="text" name='data1' class="form-control" id="data1"
                                           placeholder="Data de Nascimento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renda R$</label>
                                <div class="col-sm-10">
                                    <input type="text" name='renda1' class="form-control currency" id="renda1"
                                           placeholder="Renda do Dependente">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Oncológico</label>
                                <div class="col-sm-10">
                                    <input type="text" name='oncologico1' class="form-control" id="oncologico1"
                                           placeholder="Paciente Oncológico">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Doença Crônica</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cronico1' class="form-control" id="cronico1"
                                           placeholder="Paciente Crônico ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Deficiente</label>
                                <div class="col-sm-10">
                                    <input type="text" name='deficiente1' class="form-control" id="deficiente1"
                                           placeholder="Deficiente">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tipo de Deficiencia</label>
                                <div class="col-sm-10">
                                    <input type="text" name='tipodeficiente1' class="form-control" id="tipodeficiente1"
                                           placeholder="Tipo de Deficiente">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
