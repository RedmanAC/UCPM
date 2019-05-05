<?php

namespace App\Http\Controllers;
use App\Arbeitszeiten;

class ArbeitszeitenController extends Controller {

    public function show($id) {
        return Respone()->json(Arbeitszeiten::find($id),200);
    }

    public function store(Request $request) {
        $arbeitszeiten =  Arbeitszeiten::create($request->all());
        return Response()->json($arbeitszeiten, 200);
    }
}
