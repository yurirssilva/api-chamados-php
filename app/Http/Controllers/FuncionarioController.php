<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
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
        $funcionario = new Funcionario();
        $funcionario->fill($request->all());
        $funcionario->save();
        if ($funcionario)
            return response()->json($funcionario, 201);
        else
            return response()->json(['message' => $funcionario], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param $matricula
     * @return \Illuminate\Http\Response
     */
    public function show($matricula)
    {
        $funcionarioRetorno = Funcionario::where('matricula', $matricula)->first();
        if ($funcionarioRetorno)
            return response()->json($funcionarioRetorno, 201);
        else
            return response()->json(['message' => $funcionarioRetorno], 500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricula)
    {
        $funcionario = Funcionario::where('matricula', $matricula)->first();
        $funcionario->fill($request->all());
        $funcionario->save();
        if ($funcionario)
            return response()->json($funcionario, 201);
        else
            return response()->json(['message' => $funcionario], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricula)
    {
        //
    }
}
