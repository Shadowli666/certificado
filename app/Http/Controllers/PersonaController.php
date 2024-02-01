<?php

namespace App\Http\Controllers;

use App\Models\persona;
use App\Models\PersonaCertificado;
use App\Models\Certificado;
use App\Models\Facultad;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['persona'] = Persona::paginate(20);
        return view('persona.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona($request->except('_token'));
        $persona->save();
        return redirect('persona')->with('mensaje','Datos añadidos');
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosPersona = request()->except('_token','_method');
        Persona::where('id','=',$id)->update($datosPersona);
        return redirect('persona')->with('mensaje','Datos modificados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('persona')->with('mensaje','Datos eliminados');
    }
}
