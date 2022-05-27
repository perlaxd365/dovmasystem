<?php

namespace App\Http\Controllers;

use App\Models\unidadMedida;
use App\Http\Requests\StoreunidadMedidaRequest;
use App\Http\Requests\UpdateunidadMedidaRequest;

class UnidadMedidaController extends Controller
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
     * @param  \App\Http\Requests\StoreunidadMedidaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreunidadMedidaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function show(unidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function edit(unidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateunidadMedidaRequest  $request
     * @param  \App\Models\unidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateunidadMedidaRequest $request, unidadMedida $unidadMedida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function destroy(unidadMedida $unidadMedida)
    {
        //
    }
}
