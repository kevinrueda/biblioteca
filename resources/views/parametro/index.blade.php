@extends('adminlte::page')

@section('title', 'Parametros')

@section('content_header')
    <h1 class="text-black text-center">Parametros</h1>
@stop

@section('content')
    <div class="container">
        <table id="parametros" class="table table-hover table-bordered table-striped text-center mt-4">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parametros as $parametro)
                    <tr>
                        <td>{{ $parametro->id }}</td>
                        <td>{{ $parametro->nombre }}</td>
                        <td>{{ $parametro->valor }}</td>
                        <td>
                            <a type="button" class="btn btn-secondary text-white m-1" data-toggle="modal"
                                data-target="#editarModal{{ $parametro->id }}">Editar</a>
                        </td>
                    </tr>

                    <div class="modal fade" id="editarModal{{ $parametro->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #e3e4e8">
                                    <h5 class="modal-title">Editar autor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            ×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('parametros.update', $parametro->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nombre" class="col-form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" readonly
                                                value="{{ $parametro->nombre }}">
                                            <label for="valor" class="col-form-label">Valor</label>
                                            <input type="text" class="form-control" id="valor" name="valor"
                                                value="{{ $parametro->valor }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#parametros').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ],
                responsive: true,
                autoWith: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado - disculpa",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar: ",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });

    </script>
@stop
