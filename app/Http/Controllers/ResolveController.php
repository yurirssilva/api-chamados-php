<?php

namespace App\Http\Controllers;

use App\Resolve;
use Illuminate\Http\Request;

class ResolveController extends Controller
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
        $resolve = new Resolve();
        $resolve->fill($request->all());
        $resolve->save();
        if ($resolve)
            return response()->json($resolve, 201);
        else
            return response()->json(['message' => $resolve], 500);
    }
    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resolveRetorno = Resolve::where('id', $id)->first();
        if ($resolveRetorno)
            return response()->json($resolveRetorno, 201);
        else
            return response()->json(['message' => $resolveRetorno], 500);
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
        $resolve = Resolve::where('id', $id)->first();
        $resolve->fill($request->all());
        $resolve->save();
        if ($resolve)
            return response()->json($resolve, 201);
        else
            return response()->json(['message' => $resolve], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resolve  $resolve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resolve $resolve)
    {
        //
    }
}
