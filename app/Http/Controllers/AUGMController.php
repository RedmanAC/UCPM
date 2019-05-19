<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AUGMController extends Controller
{

    public function index(){

        return view('AUGM');

    }

    public function store(Request $request)
    {
        $data['Auswahl1'] = $request->get('Auswahl1');
        $data['Auswahl2'] = $request->get('Auswahl2');

        return view('AUGMverify',$data);
    }

}