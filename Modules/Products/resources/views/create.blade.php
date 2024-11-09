@extends('adminlte::page')

@section('title', 'Cadastro de Produtos')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><strong>Cadastro de Produtos</strong></h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card p-3">
        <form id="formProduct" action="{{ route('product.store') }}" method="post">
            @include('products::form')
        </form>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection

@section('css')
    <style>
        #form-cpf,
        #form-rg,
        #form-nascimento,
        #form-cnpj,
        #form-razaoSocial,
        #form-iEstadual,
        #form-tipoContribuinte,
        #form-iMunicipal,
        #form-iSuframa,
        #form-empresaResponsavel {
            display: none;
        }
    </style>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#tipo').change(function() {
                var tipo = $(this).val();
                if (tipo == "Pessoa Física") {
                    $('#form-cpf').show();
                    $('#form-rg').show();
                    $('#form-nascimento').show();
                    $('#form-cnpj').hide();
                    $('#form-razaoSocial').hide();
                    $('#form-iEstadual').hide();
                    $('#form-tipoContribuinte').hide();
                    $('#form-iMunicipal').hide();
                    $('#form-iSuframa').hide();
                    $('#form-empresaResponsavel').hide();
                } else if (tipo == "Pessoa Jurídica") {
                    $('#form-cpf').hide();
                    $('#form-rg').hide();
                    $('#form-nascimento').hide();
                    $('#form-cnpj').show();
                    $('#form-razaoSocial').show();
                    $('#form-iEstadual').show();
                    $('#form-tipoContribuinte').show();
                    $('#form-iMunicipal').show();
                    $('#form-iSuframa').show();
                    $('#form-empresaResponsavel').show();
                } else {
                    $('#form-cpf').hide();
                    $('#form-rg').hide();
                    $('#form-nascimento').hide();
                    $('#form-cnpj').hide();
                    $('#form-razaoSocial').hide();
                    $('#form-iEstadual').hide();
                    $('#form-tipoContribuinte').hide();
                    $('#form-iMunicipal').hide();
                    $('#form-iSuframa').hide();
                    $('#form-empresaResponsavel').hide();
                }
            })
            // Quando faltar algum dado required, ele voltar com o select na opção que estava e trazer os campos ocultos
            var valor = $('#tipo').val();
            if (valor == "") {
                $('#tipo').val('').change();
            } else if (valor == "Pessoa Física") {
                $('#tipo').val('Pessoa Física').change();
            } else {
                $('#tipo').val('Pessoa Jurídica').change();
            }
        })
    </script>
@endsection
