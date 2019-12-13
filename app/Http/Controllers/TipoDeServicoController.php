<?php

namespace App\Http\Controllers;

use App\TipoDeServico;
use Illuminate\Http\Request;

class TipoDeServicoController extends Controller
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
        $tipoDeServico = new TipoDeServico();
        $tipoDeServico->fill($request->all());
        $tipoDeServico->save();
        if ($tipoDeServico)
            return response()->json($tipoDeServico, 201);
        else
            return response()->json(['message' => $tipoDeServico], 500);
    }
    /**
     * Display the specified resource.
     *
     * @param  $cod_servico
     * @return \Illuminate\Http\Response
     */
    public function show($cod_servico)
    {
        $tipoDeServicoRetorno = TipoDeServico::where('cod_servico', $cod_servico)->first();
        if ($tipoDeServicoRetorno)
            return response()->json($tipoDeServicoRetorno, 201);
        else
            return response()->json(['message' => $tipoDeServicoRetorno], 500);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $cod_servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_servico)
    {
        $tipoDeServico = TipoDeServico::where('cod_servico', $cod_servico)->first();
        $tipoDeServico->fill($request->all());
        $tipoDeServico->save();
        if ($tipoDeServico)
            return response()->json($tipoDeServico, 201);
        else
            return response()->json(['message' => $tipoDeServico], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoDeServico  $tipoDeServico
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDeServico $tipoDeServico)
    {
        //
    }
}
