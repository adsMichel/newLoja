@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><strong></strong></h1>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('product.create') }}" class="btn btn-primary float-sm-right button-theme"><i
                        class="fas fa-fw fa-user-plus"></i> Novo Produto</a>
            </div>
        </div>
    </div>
@stop

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
                    <form action="{{ route('product.index') }}" method="GET">
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
                                    <label>Nome</label>
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
                            <h3 class="card-title">Lista de produtos</h3>
                        </div>

                        <div class="card-body table-responsive p-0">
                            @if (isset($data) && $data->isNotEmpty())
                                <table class="table  table-striped table-bordered table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;Cód. Produto</th>
                                            <th>&nbsp;Nome</th>
                                            <th>&nbsp;Preço</th>
                                            <th>&nbsp;Quantidade</th>
                                            <th>&nbsp;Data</th>
                                            <th>&nbsp;Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr class=" {{ $item->isProblematico === 1 ? 'table-danger' : '' }}">
                                                <td class="align-middle">{{ $item->id }}</td>
                                                <td class="align-middle">{{ $item->name }}</td>
                                                <td class="align-middle">{{ $item->price }}</td>
                                                <td class="align-middle">{{ $item->quantity }}</td>
                                                <td class="align-middle">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->tz('America/Sao_Paulo')->format('d/m/Y') }}
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group">
                                                        <a href="{{ route('product.edit', $item->id) }}"
                                                            data-toggle="tooltip" title="Editar Produto"><button
                                                                class="btn-sm btn-primary mr-1"
                                                                style="padding-left: 9px; padding-right: 8px"><i
                                                                    class="fas fa-edit"></i></button></a>
                                                        <form id="formExcluir{{ $item->id }}"
                                                            action="{{ route('product.destroy', $item->id) }}"
                                                            method="POST" style="display: inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn-sm btn-danger"
                                                                style="padding-left: 10px; padding-right: 10px"
                                                                data-toggle="tooltip" title="Excluir Produto">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div>
                                    <h5 class="ml-2">Não existe registro de produtos.</h5>
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
    <script>
        function confirmarExclusao(event, itemId) {
            event.preventDefault();
            Swal.fire({
                title: 'Tem certeza que deseja exluir?',
                text: "Essa ação não pode ser desfeita!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#0d6efd',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Excluir'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formExcluir' + itemId).submit();
                }
            });
        };
    </script>
@endsection
