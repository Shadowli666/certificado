<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Facultad;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['certificado'] = Certificado::paginate(10);
        return view('certificado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $certificado = new Certificado();
        $facultad = Facultad::pluck('name','id');
        return view('certificado.create',compact('facultad','certificado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Certificado::insert($request->except('_token'));
        return redirect('certificado')->with('mensaje','Datos añadidos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $certificado = Certificado::findOrFail($id);
        $facultad = Facultad::pluck('name','id');
        return view('certificado.edit',compact('facultad','certificado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosCertificado = request()->except('_token','_method');
        Certificado::where('id','=',$id)->update($datosCertificado);
        return redirect('certificado')->with('mensaje','Datos modificados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Certificado::destroy($id);
        return redirect('certificado')->with('mensaje','Datos eliminados');
    }
}
