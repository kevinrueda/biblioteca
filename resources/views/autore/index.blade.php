@extends('adminlte::page')

@section('title', 'Autores')

@section('content_header')
    <h1 class="text-black text-center">Autores</h1>
@stop

@section('content')
    <div class="container">
        <a type="button" class="btn btn-success text-white float-right" data-toggle="modal"
            data-target="#nuevoModal"><b>Nuevo</b></a>
        <table id="autores" class="table table-hover table-bordered table-striped text-center mt-4">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nombre }}</td>
                        <td>
                            <a type="button" class="btn btn-danger text-white m-1" data-toggle="modal"
                                data-target="#eliminarModal{{ $autor->id }}">Eliminar</a>
                            <a type="button" class="btn btn-secondary text-white m-1" data-toggle="modal"
                                data-target="#editarModal{{ $autor->id }}">Editar</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="eliminarModal{{ $autor->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #f7949c">
                                    <h5 class="modal-title">Eliminar autor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            ×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <p class="text-center">Está seguro(a) de eliminar el autor
                                            {{ $autor->nombre }} /
                                            {{ $autor->id }}?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button href="#" type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editarModal{{ $autor->id }}">
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
                                    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nombre" class="col-form-label">Nombre</label>
                                            <input type="number" class="form-control" id="nombre" name="nombre"
                                                value="{{ $autor->nombre }}">
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

    <div class="modal fade" id="nuevoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#c2efcd ">
                    <h5 class="modal-title">Nuevo autor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/autores" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
            $('#autores').DataTable({
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
