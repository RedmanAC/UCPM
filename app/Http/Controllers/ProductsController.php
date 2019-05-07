<?php

namespace WayneSchlegelInc.\Http\Controllers;

use WayneSchlegelInc.\Produkt;
use Illuminate\Http\Request;
use WayneSchlegelInc.\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produkt::paginate(15);

        return view('produkte', compact('products'));
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

        Produkt::create([
            'name' => request('name'),
            'größe' => request('größe'),
            'anzahl' => request('anzahl'),
            'artikelnummer' => request('artikelnummer'),
            'barcode' => request('barcode'),
            'regal' => request('regal'),
            'preis' => request('preis')
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \WayneSchlegelInc.\Produkt  $produkt
     * @return \Illuminate\Http\Response
     */
    public function show(Produkt $produkt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \WayneSchlegelInc.\Produkt  $produkt
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkt $produkt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \WayneSchlegelInc.\Produkt  $produkt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkt $produkt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \WayneSchlegelInc.\Produkt  $produkt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkt $produkt)
    {
        $product = Produkt::destroy($produkt->id);

        return back();
    }
}
