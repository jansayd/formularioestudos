<div role="tabpanel" class="tab-pane" id="declaracao">
    <div style="padding-top:20px;">
        <form class="form-horizontal" id="frm-declaracao" action="">
            <div class="form-group">
                <label class="col-sm-2 control-label">Data de Nascimento</label>
                <div class="col-sm-10">
                    <input type="text" name='datanascimento' class="form-control date" id="datanascimento"
                           placeholder="Data de Nascimento">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Genero</label>
                <div class="col-sm-10">
                    {!! $genero !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Nacionalidade</label>
                <div class="col-sm-10">
                    <input type="text" name='nacionalidade' class="form-control" id="nacionalidade"
                           placeholder="Nacionalidade" value="Brasileira">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
                    <input type="text" name='estado' class="form-control" id="estado" placeholder="Estado">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Município</label>
                <div class="col-sm-10">
                    <input type="text" name='municipio' class="form-control" id="municipio"
                           placeholder="Cidade / Município">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Escolaridade</label>
                <div class="col-sm-10">
                    <input type="text" name='escolaridade' class="form-control" id="escolaridade"
                           placeholder="Escolaridade">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Vinculo Empregatício</label>
                <div class="col-sm-10">
                    <input type="text" name='vinculoempregaticio' class="form-control"
                           id="vinculoempregaticio" placeholder="Vinculo Empregatício">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Renda</label>
                <div class="col-sm-10">
                    <input type="text" name='renda' class="form-control currency" id="renda"
                           placeholder="Renda Mensal R$">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Mulher Chefe de Família</label>
                <div class="col-sm-10">
                    <input type="text" name='mulherchefe' class="form-control" id="mulherchefe"
                           placeholder="Mulher Chefe de Família">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Oncológico</label>
                <div class="col-sm-10">
                    {!! $oncologico !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Doença Crônica</label>
                <div class="col-sm-10">
                    {!! $cronico !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Deficiente</label>
                <div class="col-sm-10">
                    {!! $deficiente !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tipo de Deficiencia</label>
                <div class="col-sm-10">
                    <input type="text" name='tipodeficiente' class="form-control" id="tipodeficiente"
                           placeholder="Tipo de Deficiente" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-success btnPrevious">Anterior</button>
                    <button type="button" class="btn btn-success btnNext">Próximo</button>
                </div>
            </div>
        </form>
    </div>
</div>
