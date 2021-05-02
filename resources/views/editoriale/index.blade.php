@extends('adminlte::page')

@section('title', 'Editoriales')

@section('content_header')
    <h1 class="text-black text-center">Editoriales</h1>
@stop

@section('content')
    <div class="container">
        <a type="button" class="btn btn-success text-white float-right" data-toggle="modal"
            data-target="#modalCrear"><b>Nuevo</b></a>
        <table id="tbEditoriales" class="table table-hover table-bordered table-striped text-center mt-4">
            <thead class="bg-dark">
                <tr>
                    <th width="10rem">ID</th>
                    <th>Nombre</th>
                    <th width="200rem">Acciones</th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="modalCrear" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-gradient-success">
                    <h5 class="modal-title">Nueva editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmEditoriales" action="editoriales">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                            <button id="btnCrear" type="submit" class="btn btn-success"
                                data-dismiss="modal">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEditar" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-gradient-secondary">
                    <h5 class="modal-title">Modificar editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmEditar">
                        <div class="form-group">
                            <label for="id" class="col-form-label">ID</label>
                            <input id="id" name="id" type="text" class="form-control" readonly>
                            <label for="nombreEditar" class="col-form-label">Nombre</label>
                            <input id="nombreEditar" name="nombreEditar" type="text" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                            <button id="btnEditar" type="submit" class="btn btn-success"
                                data-dismiss="modal">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        //Al cargar la pagina se establece la relacion de la tabla con DataTable
        $(document).ready(function() {
            var editoriales = $("#tbEditoriales").DataTable({
                "lengthMenu": [
                    [10, 50, -1],
                    [10, 50, "All"]
                ],
                //serverSide se utiliza cuando existen muchos datos y es necesario que las procese el servidor
                serverSide: true,
                //Se le asigna la ruta a Ajax para recuperar a traves del metodo GET los registros de la BD
                ajax: "{{ route('datatable.editorial') }}",
                /*Se configura previamente valores por defecto para determinadas columnas
                en este caso la columna de Acciones[las columnas se enumeran desde 0] 
                no se puede ordenar alfabeticamente ni tampoco filtrar por ese campo*/
                columnDefs: [{
                    targets: 2,
                    orderable: false,
                    serchable: false
                }],
                //Se configura el objeto data con el nombre de las columnas
                columns: [{
                        data: "id",
                    },
                    {
                        data: "nombre",
                    },
                    {
                        data: "acciones",
                    }
                ],
                //Optimiza el diseño de la tabla
                responsive: true,
                //Control de tamaño de columnas
                autoWidth: false,

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

        //Funcion para el evento click del boton btnCrear
        $("body").on("click", "#btnCrear", function(e) {
            //Evita enviar el formulario por defecto dado que se hara por Ajax
            e.preventDefault();
            //Se asigna los valores que tiene el input con id nombre
            let nombre = $("#nombre").val();
            let token = "{{ csrf_token() }}";
            //Se crea el objeto data que almacena los valores anteriores
            let data = {
                nombre: nombre,
                _token: token
            };

            //Codigo Ajax encargado de almacenar un nuevo registro a la BD
            $.ajax({
                type: "POST",
                url: "{{ route('editoriales.store') }}",
                data: data,
                //Si el metodo POST fue exitoso se lleva a cabo el siguiente codigo
                success: function() {
                    //Asigna a la variable editoriales la tabla de la BD
                    let editoriales = $("#tbEditoriales").DataTable();
                    //Actualiza la tabla sin recargar la pagina y mantiene el indice de la paginacion
                    editoriales.ajax.reload(null, false);
                    $("#nombre").val("");
                    toastr.success('Editorial agregada con éxito');
                }
            })
        });

        $("body").on("click", "#btnEditar", function(e) {
            e.preventDefault();
            let nombre = $("#nombreEditar").val();
            let token = "{{ csrf_token() }}";
            let id = $("#id").val()
            let data = {
                id: id,
                nombre: nombre,
                _token: token
            };

            //Codigo Ajax encargado de modificar un registro de la BD
            $.ajax({
                type: "PATCH",
                url: "/editoriales/" + id,
                data: data,
                success: function() {
                    var editoriales = $("#tbEditoriales").DataTable();
                    editoriales.ajax.reload(null, false);
                    $("#nombreEditar").val("");
                    toastr.success('Editorial modificada con éxito');
                }
            })
        });

        $("body").on("click", ".borrarEditorial", function(e) {
            e.preventDefault();
            let editorial_id = $(this).data("id");
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir los cambios!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'La editorial fue eliminada.',
                        'success',
                        //Codigo Ajax encargado de eliminar un registro de la BD
                        $.ajax({
                            type: "POST",
                            url: "/editoriales/" + editorial_id,
                            data: {
                                _method: "DELETE",
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                var editoriales = $("#tbEditoriales").DataTable();
                                editoriales.ajax.reload(null, false);
                            },
                        })
                    )
                }
            })
        });


        $("body").on("click", ".editarEditorial", function() {
            let id = $(this).data("id");
            //Recupera la informacion del registro que tenga ese id y lo almacena en la variable data
            $.getJSON("/editoriales/" + id + "/edit", function(data) {
                //Se le asigna al input con id (id,nombre) el valor que tiene el objeto data en el arreglo 0 con atributo (id,nombre)
                $("#id").val(data[0].id);
                $("#nombreEditar").val(data[0].nombre);
                //Muestra la ventana modal con dicho id
                $("#modalEditar").modal("show");
            })
        });

    </script>

@stop
