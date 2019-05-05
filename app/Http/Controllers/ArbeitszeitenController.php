<?php

namespace App\Http\Controllers;
use App\Arbeitszeiten;

class ArbeitszeitenController extends Controller {

    public function show($id) {
        return Arbeitszeiten::find($id);
    }

    public function store(Request $request) {
        $arbeitszeiten =  Arbeitszeiten::create($request->all());
        return Response()->json($arbeitszeiten, 200);
    }
}
