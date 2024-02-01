<?php

namespace App\Http\Controllers;

use App\Models\PersonaCertificado;
use App\Models\Persona;
use App\Models\Certificado;
use Illuminate\Http\Request;

class PersonaCertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($person_id)
    {
        $person = Persona::findOrFail($person_id);
        $certificado = Certificado::pluck('title','id');
        return view('asignar.create',compact('person','certificado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * FIXME:
         *Se hacen registros repetidos,
         *validar y comparar para que no se registren dos certificados iguales.
         */
        $personaCertificado = new PersonaCertificado($request->except('_token'));
        $personaCertificado->save();
        return redirect('persona')->with('mensaje','Datos añadidos');
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonaCertificado $personaCertificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonaCertificado $personaCertificado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonaCertificado $personaCertificado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonaCertificado $personaCertificado)
    {
        //
    }
}
