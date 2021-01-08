@extends('adminlte::page')

@section('title', 'Editoriales')

@section('content_header')
    <h1 class="text-black text-center">Editoriales</h1>
@stop

@section('content')
    <div class="container">
        <a type="button" class="btn btn-success text-white float-right" data-toggle="modal"
            data-target="#exampleModal"><b>Nuevo</b></a>
        <table id="editoriales" class="table table-hover table-bordered table-striped text-center mt-4">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($editoriales as $editorial)
                    <tr>
                        <td>{{ $editorial->id }}</td>
                        <td>{{ $editorial->nombre }}</td>
                        <td>
                            <a type="button" class="btn btn-danger text-white m-1" data-toggle="modal"
                                data-target="#eliminarModal{{ $editorial->id }}">Eliminar</a>
                            <a type="button" class="btn btn-secondary text-white m-1" data-toggle="modal"
                                data-target="#editarModal{{ $editorial->nombre }}">Editar</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="eliminarModal{{ $editorial->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #f7949c">
                                    <h5 class="modal-title">Eliminar editorial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            ×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <p class="text-center">Está seguro(a) de eliminar el editorial
                                            {{ $editorial->nombre }} /
                                            {{ $editorial->id }}?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST">
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
                    <div class="modal fade" id="editarModal{{ $editorial->nombre }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #e3e4e8">
                                    <h5 class="modal-title">Editar editorial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            ×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('editoriales.update', $editorial->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nombre" class="col-form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                value="{{ $editorial->nombre }}">
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

    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#c2efcd ">
                    <h5 class="modal-title">Nueva editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/editoriales" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
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
    $('#editoriales').DataTable({
        "lengthMenu" : [[5,10,50,-1], [5,10,50,"All"]],
        responsive: true,
        autoWith: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar: ",
            "paginate" : {
                "next" : "Siguiente",
                "previous" : "Anterior"
            }
        }
    });
} );
</script>
@stop
