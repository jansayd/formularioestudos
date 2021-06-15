<div role="tabpanel" class="tab-pane" id="dependentes">
    <div style="padding-top:20px;">
        <form class="form-horizontal" action="" id="frm_dependente" onsubmit="return false;" method="POST">
            <div class="row">
                <div class='col-md-12  text-right' style="margin-bottom: 20px">
                    <input type='button' id='btn_open_form_adicao_dependentes'
                           class='btn btn-primary'
                           value='Adicionar Dependente '/>
                </div>
                <div class='col-md-12' style="margin-bottom: 20px">
                    <div id="dependentes-list"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 text-right">
                        <button type="button" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </div>

            <div class="modal" id="ModalDependentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                    <input type="text" name='nome_dep' class="form-control" id="nome_dep"
                                           placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cpf_dep' class="form-control cpf" id="cpf_dep"
                                           placeholder="CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input type="text" name='data_dep' class="form-control date" id="data_dep"
                                           placeholder="Data de Nascimento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renda R$</label>
                                <div class="col-sm-10">
                                    <input type="text" name='renda_dep' class="form-control currency" id="renda_dep"
                                           placeholder="Renda do Dependente">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Oncológico</label>
                                <div class="col-sm-10">
                                    {!! $oncologico_dep !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Doença Crônica</label>
                                <div class="col-sm-10">
                                    {!! $cronico_dep !!}

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Deficiente</label>
                                <div class="col-sm-10">
                                    {!! $deficiente_dep !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tipo de Deficiencia</label>
                                <div class="col-sm-10">
                                    <input type="text" name='tipodeficiente_dep' class="form-control"
                                           id="tipodeficiente_dep" disabled
                                           placeholder="Tipo de Deficiência">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" id="btn_save_dependente" class="btn btn-success">Cadastrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
