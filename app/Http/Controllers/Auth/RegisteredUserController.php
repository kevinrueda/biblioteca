<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $departamentos = DB::table('departamentos')->orderBy('nombre')->get();
        $grados = DB::table('grados')->get();
        $generos = DB::table('generos')->orderBy('nombre')->get();
        $jornadas = DB::table('jornadas')->get();
        $ps_deweys = DB::table('ps_deweys')->orderBy('nombre')->get();
        return view('auth.register')->with(['departamentos' => $departamentos, 
                                            'grados' => $grados, 
                                            'generos' => $generos, 
                                            'jornadas' => $jornadas,
                                            'ps_deweys' => $ps_deweys]);;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'municipio_id' => 'required',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|integer',
            'password' => 'required|string|min:8',
            'jornada_id' => 'required',
            'grado_id' => 'required',
            'genero_id' => 'required',
            'preferencia' => 'required',
        ]);

        Auth::login($user = User::create([
            'id' => $request->id,
            'rol_id' => 4,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'municipio_id' => $request->municipio_id,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
            'jornada_id' => $request->jornada_id,
            'grado_id' => $request->grado_id,
            'genero_id' => $request->genero_id,
            'estado_usuario_id' => 1,
            'preferencia' => $request->preferencia
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    public function municipios($id){
        echo json_encode(DB::table('municipios')->where('departamento_id', $id)->orderBy('nombre')->get());
    }
}
