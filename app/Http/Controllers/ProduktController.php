<?php


namespace App\Http\Controllers;
use App\Produkt;
 
class ProduktController extends Controller
{
    public function index()
    {
        //return Produkt::all();
        return "hello world";
    }
 
    public function show($id)
    {
        return Response()->json(Produkt::find($id),200);
    }

    public function store(Request $request)
    {

        return "hello produkt";
      //  return Response()->json(Produkt::create($request->all()),200);
    }

    public function update(Request $request, $id)
    {
        $produkt = Produkt::findOrFail($id);
        $produkt->update($request->all());

        return Response()->json($produkt,200);
    }

    public function delete(Request $request, $id)
    {
        $produkt = Produkt::findOrFail($id);
        $produkt->delete();

        return Response()->json('',204);
    }
}
