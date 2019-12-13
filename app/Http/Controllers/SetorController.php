<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
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
        $setor = new Setor();
        $setor->fill($request->all());
        $setor->save();
        if ($setor)
            return response()->json($setor, 201);
        else
            return response()->json(['message' => $setor], 500);
    }
    /**
     * Display the specified resource.
     *
     * @param  $cod_setor
     * @return \Illuminate\Http\Response
     */
    public function show($cod_setor)
    {
        $setorRetorno = Setor::where('cod_setor', $cod_setor)->first();
        if ($setorRetorno)
            return response()->json($setorRetorno, 201);
        else
            return response()->json(['message' => $setorRetorno], 500);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $cod_setor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_setor)
    {
        $setor = Setor::where('cod_setor', $cod_setor)->first();
        $setor->fill($request->all());
        $setor->save();
        if ($setor)
            return response()->json($setor, 201);
        else
            return response()->json(['message' => $setor], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setor $setor)
    {
        //
    }
}
