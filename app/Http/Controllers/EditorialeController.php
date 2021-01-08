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
    public function index()
    {
        $editoriales = Editoriale::all();
        return view('editoriale.index')->with('editoriales', $editoriales);
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
    public function store(Request $request)
    {
        $editorial = new Editoriale();
        $editorial->nombre = $request->get('nombre');
        $editorial->save();

        return redirect('editoriales');
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
    public function edit(Editoriale $editoriale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editoriale $editoriale)
    {
        Editoriale::where('id', $editoriale->id)->update(['nombre'=>$request->get('nombre')]);
        return redirect('editoriales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editoriale  $editoriale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editoriale $editoriale)
    {
        Editoriale::where('id', $editoriale->id)->delete();

        return redirect('editoriales');
    }
}
