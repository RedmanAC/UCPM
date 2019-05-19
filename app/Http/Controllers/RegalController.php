<?php

//namespace WayneSchlegelInc.\Http\Controllers;

//use WayneSchlegelInc.\Regal;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use WayneSchlegelInc.\Http\Controllers\Controller;

class RegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('regale');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \WayneSchlegelInc.\Regal  $regal
     * @return \Illuminate\Http\Response
     */
    public function show(Regal $regal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \WayneSchlegelInc.\Regal  $regal
     * @return \Illuminate\Http\Response
     */
    public function edit(Regal $regal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \WayneSchlegelInc.\Regal  $regal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regal $regal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \WayneSchlegelInc.\Regal  $regal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regal $regal)
    {
        //
    }
}
