@extends('adminlte::page')

@section('title', 'Ordens de Serviços')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        Filtro
                    </h3>
                    <!-- tools box -->
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                    <form action="{{ route('sales.index') }}" method="GET">
                        <div class="form-row">
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="CPF"
                                        name="cpf" value="{{ \Request::get('cpf') }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <input type="text" class="form-control" placeholder="Nome" name="name"
                                        value="{{ \Request::get('name') }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" class="form-control" id="celular" placeholder="Celuar"
                                        name="celular" value="{{ \Request::get('celular') }}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label></label>
                                    <button type="submit" class="form-control btn-sm btn-primary"
                                        style="margin-top: 6px">Procurar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Ordens de Serviços</h3>
                        </div>

                        <div class="card-body table-responsive p-0">
                            @if (isset($data) && $data->isNotEmpty())
                                <table class="table  table-striped table-bordered table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;Ordem de Serviço</th>
                                            <th>&nbsp;Cliente</th>
                                            <th>&nbsp;Total</th>
                                            <th>&nbsp;Forma de Pagamento</th>
                                            <th>&nbsp;Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            @foreach ($item->salesOrders as $sale)
                                                <tr>
                                                    <td class="align-middle">{{ $sale->id }}</td>
                                                    <td class="align-middle">{{ $item->name }}</td>
                                                    <td class="align-middle">{{ $sale->total }}</td>
                                                    <td class="align-middle">{{ $sale->forma_pagamento }}</td>
                                                    <td class="align-middle">{{ $sale->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div>
                                    <h5 class="ml-2">Não existe registro de ordem de serviço.</h5>
                                </div>
                            @endif
                        </div>

                    </div>
                    @if (isset($data) && $data->isNotEmpty())
                        @if (count($data) == 1)
                            <p>Foi encontrado 1 registro.</p>
                        @elseif($data->total() > $data->perPage())
                            <p>Exibindo {{ count($data) }} de um total de {{ $data->total() }} registros.</p>
                        @else
                            <p>Foram encontrados {{ count($data) }} registros.</p>
                        @endif
                        {{ $data->appends($_GET)->links() }}
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

@endsection

@section('footer')
    @include('footer')
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
@endsection
