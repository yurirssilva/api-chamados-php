<?php

namespace App\Http\Controllers;

use App\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chamado = new Chamado();
        $chamado->fill($request->all());
        $chamado->save();
        if ($chamado)
            return response()->json($chamado, 201);
        else
            return response()->json(['message' => $chamado], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chamadoRetorno = Chamado::where('id', $id)->first();
        if ($chamadoRetorno)
            return response()->json($chamadoRetorno, 201);
        else
            return response()->json(['message' => $chamadoRetorno], 500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chamado = Chamado::where('id', $id)->first();
        $chamado->fill($request->all());
        $chamado->save();
        if ($chamado)
            return response()->json($chamado, 201);
        else
            return response()->json(['message' => $chamado], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chamado $chamado)
    {
        //
    }
}
