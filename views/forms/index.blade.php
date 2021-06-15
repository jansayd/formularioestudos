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
            });  //static mask
            $("#cpf").inputmask("999.999.999-99");
            $(".date").inputmask("99/99/9999");
            $(".phone").inputmask({
                mask: ["(99) 9999-9999", "(99) 99999-9999"]
            });
            $('.currency').maskMoney();
        });


        function getCep(cep) {
            cep = cep.replace(/\D/g, '');

            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                console.log(dados);
                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#municipio").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    $("#ibge").val(dados.ibge);
                    $('#numero').focus();
                } //end if.
            });

        }
    </script>
@endsection
