<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use Illuminate\Http\Request;

class EditorialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retorna la vista sin datos
    public function index()
    {
        return view('editoriale.index');
    }

    //Trae todos los datos de la tabla y crea los botones de acciones y retorna un json
    public function editorial()
    {
        $editoriales = Editoriale::all();
        return datatables()->of($editoriales)
            ->addColumn('acciones', function ($row) {
                $html = '<a href="#" class="btn btn-primary btn-sm verEditorial">Ver</a> ';
                $html .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Editar" class="btn btn-secondary btn-sm editarEditorial" data-toggle="modal" data-target="#modalEditar">Editar</a>';
                $html .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Borrar" class="btn btn-danger btn-sm borrarEditorial">Borrar</a>';

                return $html;
            })
            ->rawColumns(['acciones'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Almacena un nuevo registro en la tabla, pero antes valida si tiene los campos necesarios
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        $editorial = new Editoriale();
        $editorial->nombre = $request->nombre;
        $editorial->save();

        return response()->json(['mensaje' => 'Registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */
    public function show(Editoriale $editoriale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */

    //Retorna informacion de un registro a la ventana modal para su eventual modificacion
    public function edit(Editoriale $editoriale)
    {
        $editorial = Editoriale::find($editoriale);
        return response()->json($editorial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */

    //Actualiza el registro que haya sido cargado en la ventana modal
    public function update(Request $request, Editoriale $editoriale)
    {
        Editoriale::where('id', $editoriale->id)->update(['nombre' => $request->get('nombre')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */

    //Elimina el registro con determinada id
    public function destroy(Editoriale $editoriale)
    {
        Editoriale::where('id', $editoriale->id)->delete();

        return redirect('editoriales');
    }
}
