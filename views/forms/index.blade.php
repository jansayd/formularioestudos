@extends('layout.master')

@section('title','Cadastrar Usuário')

@section('content')
    <div>
        <!-- Nav tabs -->
    @include('partials.navbar')

    <!-- Tab panes -->
        <div class="tab-content">
            @include("partials.dadospessoais")
            @include("partials.endereco")
            @include("partials.declaracao")
            @include("partials.dependentes")
        </div>
    </div>
@endsection

@section('js')
    <script !src="">
        $(document).ready(function () {
            $("#cep").inputmask("99999-999").on('blur', function (data) {
                getCep(data.target.value);
            });
            $(".cpf").inputmask("999.999.999-99");
            $(".date").inputmask("99/99/9999");
            $(".phone").inputmask({
                mask: ["(99) 9999-9999", "(99) 99999-9999"]
            });
            $('.currency').maskMoney();

            $('#deficiente').on('change', function (evt) {
                let status = evt.target.value === 'N' ? true : false;
                $('#tipodeficiente').prop('disabled', status)
            });

            $('#deficiente_dep').on('change', function (evt) {
                let status = evt.target.value === 'N' ? true : false;
                $('#tipodeficiente_dep').prop('disabled', status)
            });

            $('#btn_open_form_adicao_dependentes').on('click', function () {
                $('#ModalDependentes').modal('show');
            });

            $('#btn_save_dependente').on('click', function () {
                saveDependente();
            });

            $('.btnNext').click(function(){
                $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });

            $('.btnPrevious').click(function(){
                $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });

            getDependentes();
        });


        function getDependentes() {
            $.ajax({
                type: "GET",
                url: "../ajax/ajax.php?action=get-dependentes",
                dataType: 'json',
                success: function (ret) {
                    $('#dependentes-list').html(ret.dependentes);
                },
            });
        }

        function getCep(cep) {
            cep = cep.replace(/\D/g, '');

            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                console.log(dados);
                if (!("erro" in dados)) {
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#municipio").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    $("#ibge").val(dados.ibge);
                    $('#numero').focus();
                }
            });
        }

        function deletaDependente(unique) {
            $.ajax({
                type: "POST",
                url: "../ajax/ajax.php?action=delete-dependente",
                data: {'dependente': unique},
                dataType: 'json',
                success: function (ret) {
                    getDependentes();
                },
            });
        }

        function saveDependente() {
            $.ajax({
                type: "POST",
                url: "../ajax/ajax.php?action=save-dependente",
                data: $("#frm_dependente").serialize(),
                dataType: 'json',
                success: function (ret) {
                    clearDependenteForm();
                    getDependentes();
                    $('#ModalDependentes').modal('hide');
                },
            });
        }

        function clearDependenteForm() {
            $('#parentesco, #nome_dep, #cpf_dep, #data_dep, #renda_dep, #oncologico_dep, #cronico_dep, #deficiente_dep, #tipodeficiente_dep').val('');
        }
    </script>
@endsection
