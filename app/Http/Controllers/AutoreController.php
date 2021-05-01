<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use Illuminate\Http\Request;

class AutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autore::all();
        return view('autore.index')->with('autores',$autores);
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
        $request->validate([
            'nombre' => 'required'
        ]);
        $autor = new Autore();
        $autor->nombre = $request->get('nombre');
        $autor->save();

        return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autore  $autore
     * @return \Illuminate\Http\Response
     */
    public function show(Autore $autore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autore  $autore
     * @return \Illuminate\Http\Response
     */
    public function edit(Autore $autore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autore  $autore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autore $autore)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        Autore::where('id', $autore->id)->update(['nombre'=>$request->get('nombre')]);
        return redirect('autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autore  $autore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autore $autore)
    {
        Autore::where('id', $autore->id)->delete();

        return redirect('autores');
    }
}
