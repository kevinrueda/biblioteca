<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
            'id' => 'required|integer|max:10',
            'rol_id' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'municipio_id' => 'required|integer',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|integer|max:10',
            'contraseña' => 'required|string|confirmed|min:8',
            'jornada_id' => 'required|integer',
            'grado_id' => 'required|integer',
            'genero_id' => 'required|integer',
            'estado_usuario_id' => 'required|integer',
            'preferencia' => 'required|integer|max:3',
        ]);

        Auth::login($user = Usuario::create([
            'id' => $request->id,
            'rol_id' => $request->rol_id,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'municipio_id' => $request->municipio_id,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'contraseña' => Hash::make($request->contraseña),
            'jornada_id' => $request->jornada_id,
            'grado_id' => $request->grado_id,
            'genero_id' => $request->genero_id,
            'estado_usuario_id' => $request->estado_usuario_id,
            'preferencia' => $request->preferencia,
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
