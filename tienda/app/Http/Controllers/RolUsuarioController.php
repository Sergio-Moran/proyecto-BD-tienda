<?php

namespace App\Http\Controllers;

use App\Http\Requests\Usuarios\Guardar;
use App\Models\rol_usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RolUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'rol' => $request->get('rol'),
            'password' => Hash::make($request->get('password')),
        ]);
        return redirect("/Inicio/index")
            ->with('message', 'Usuario agregado ✔️');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rol_usuario  $rol_usuario
     * @return \Illuminate\Http\Response
     */
    public function show(rol_usuario $rol_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rol_usuario  $rol_usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(rol_usuario $rol_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rol_usuario  $rol_usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rol_usuario $rol_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rol_usuario  $rol_usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(rol_usuario $rol_usuario)
    {
        //
    }
}
