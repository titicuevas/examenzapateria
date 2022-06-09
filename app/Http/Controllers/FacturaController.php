<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacturaRequest;
use App\Http\Requests\UpdateFacturaRequest;
use App\Models\Factura;
use Illuminate\Support\Facades\Auth;

class FacturaController extends Controller
{

    public function mostrar()
    {

        $facturas = Factura::where('user_id',Auth::id())->get();
        //$facturas = Factura::all();

        return view('facturas.mostrar',['facturas'=>$facturas]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'facturas.index';
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
     * @param  \App\Http\Requests\StoreFacturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacturaRequest  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacturaRequest $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }

    public function mostrardetalles(Factura $factura){

        //$lineas = $factura->lineas;


        return view('facturas.detalles',[
            'factura'=>$factura,
        ]);

    }
}
