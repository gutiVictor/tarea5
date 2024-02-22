<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('formularioBootstrap');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validamos los datos
         $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:formularios',
            /* 'contraseña' => 'required|confirmed', */
           
          ]);

          // Guardamos en la DB
          $form = new Formulario;
          $form->nombre = $request->nombre;
          $form->apellido = $request->apellido;
          $form->email = $request->email;
        /*   $form->contraseña = $request->contraseña; */
         
   
          $form->save();
          return back()->with('success', 'Formulario enviado con éxito.');        
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
