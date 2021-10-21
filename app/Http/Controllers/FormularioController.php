<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formularios = Formulario::all();
        return view('formulario.create');
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
        //
        $formulario = new Formulario();
        $formulario -> nome_proprietario=$request -> nome_proprietario;
        $formulario -> telefone_proprietario=$request -> telefone_proprietario; 
        $formulario -> telefone_fixo=$request -> telefone_fixo;   
        $formulario -> email_=$request -> email_;
        $formulario -> cidade=$request -> cidade;
        $formulario -> tipo=$request -> tipo;
        $formulario -> matricula=$request -> matricula;
        $formulario -> zona=$request -> zona;
        $formulario -> nome_motorista=$request -> nome_motorista;
        $formulario -> telefone_motorista=$request -> telefone_motorista;
        $formulario -> inicio=$request -> inicio;
        $formulario -> fim=$request -> fim;
        $formulario -> tipo_gps=$request -> tipo_gps;
        $formulario -> imei_gps=$request -> imei_gps;
        $formulario -> sim_gps=$request ->sim_gps;

        $formulario -> save();
        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
