<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
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
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();
        if ($produto)
            return response()->json($produto, 201);
        else
            return response()->json(['message' => $produto], 500);
    }
    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtoRetorno = Produto::where('id_produto', $id)->first();
        if ($produtoRetorno)
            return response()->json($produtoRetorno, 201);
        else
            return response()->json(['message' => $produtoRetorno], 500);
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
        $produto = Produto::where('id_produto', $id)->first();
        $produto->fill($request->all());
        $produto->save();
        if ($produto)
            return response()->json($produto, 201);
        else
            return response()->json(['message' => $produto], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
