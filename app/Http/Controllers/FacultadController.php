<?php

namespace App\Http\Controllers;

use App\Models\facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['facultad'] = Facultad::paginate(15);
        return view('facultad.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facultad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Facultad::insert($request->except('_token'));
        return redirect('facultad')->with('mensaje','Datos añadidos');
    }

    /**
     * Display the specified resource.
     */
    public function show(facultad $facultad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $facultad = Facultad::findOrFail($id);
        return view('facultad.edit', compact('facultad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $datosFacultad = request()->except('_token','_method');
        Facultad::where('id','=',$id)->update($datosFacultad);
        return redirect('facultad')->with('mensaje','Datos modificados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Facultad::destroy($id);
        return redirect('facultad')->with('mensaje','Datos eliminados');
    }
}
