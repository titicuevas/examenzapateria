<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use App\Models\Carrito;
use App\Models\Zapato;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carritos = Auth::user()->carritos->sortBy('id');

        $total = 0;
        foreach ($carritos as $carrito ) {
            $total += $carrito->zapato->precio * $carrito->cantidad;
        }

        return view('carritos.index', [
            'carritos' => $carritos,
            'total' => $total,
        ]);
    }

    public function sumar(Carrito $carrito)
    {
        $carrito->cantidad++;
        $carrito->save();

        return back();
    }

    public function restar(Carrito $carrito)
    {
        if ($carrito->cantidad == 1) {
            $carrito->delete();
        } else {
            $carrito->cantidad--;
            $carrito->save();
        }

        return back();
    }

    public function vaciar()
    {
        $carrito = Carrito::where('user_id', '=', Auth::id());

        $carrito->delete();

        return redirect()->route('carritos.index');
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
     * @param  \App\Http\Requests\StoreCarritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarritoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarritoRequest  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarritoRequest $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    public function meter(Zapato $zapato)
    {
        $carrito = Carrito::where([
            ['zapato_id', $zapato->id],
            ['user_id', Auth::id()]
        ])->first();

        if ($carrito == null) {
            $carrito = new Carrito();
            $carrito ->user_id = Auth::id();

            $carrito->zapato_id = $zapato->id;
            $carrito->cantidad = 1;

            $carrito->save();

        } else {
            $carrito->cantidad++;
            $carrito->save();
        }

        return redirect()->route('zapatos.index')
            ->with('success', "$zapato->denominacion añadido al carrito");
    }
}
