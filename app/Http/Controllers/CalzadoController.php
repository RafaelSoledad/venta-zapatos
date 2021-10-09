<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calzado;

class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $calzados = calzado::all();
        return view('calzado.index')->with('calzado', $calzados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calzado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calzados = new calzado();
        $calzados->codigo = $request->get('codigo');
        $calzados->tipo = $request->get('tipo');
        $calzados->marca = $request->get('marca');
        $calzados->modelo = $request->get('modelo');
        $calzados->precio = $request->get('precio');
        $calzados->existencia = $request->get('existencia');
        if($request->hasFile('imagen')){
            //$calzados['imagen']=time() . '_' . $request->file('imagen')->getClientOriginalName();
            //$request->file('imagen')->storeAs('imagenes', $calzados['imagen']);
            $file = $request->file('imagen');
            $destinationPath = 'imagenes/imagen/';
            $filename = time().'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $calzados->imagen = $destinationPath . $filename;
        }
        $calzados->save();
        return redirect('/calzado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calzados = calzado::find($id);
        return view('calzado.edit')->with('calzado', $calzados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calzados = calzado::find($id);
        $calzados->codigo = $request->get('codigo');
        $calzados->tipo = $request->get('tipo');
        $calzados->marca = $request->get('marca');
        $calzados->modelo = $request->get('modelo');
        $calzados->precio = $request->get('precio');
        $calzados->existencia = $request->get('existencia');
        $calzados->existencia = $request->get('existencia');
        if($request->hasFile('imagen')){
            $calzados = new calzado();
            $calzados['imagen']=time() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('imagenes', $calzados['imagen']);
        }
        $calzados->save();
        return redirect('/calzado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calzados = calzado::find($id);
        $calzados->delete();
        return redirect('/calzado');
    }
}
