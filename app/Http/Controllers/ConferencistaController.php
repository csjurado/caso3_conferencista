<?php

namespace App\Http\Controllers;
use App\Models\Conferencista;
use Illuminate\Http\Request;

class ConferencistaController extends Controller
{
    //
    public function index()
    {
        //
        return view('conferencistas.index');
    }

    public function create()
    {
        //
        return view('conferencistas.create');
    }

    public function edit(Conferencista $conferencista)
    {
        //
        // dd($vacante);
        // $this->authorize('update',$vacante);
        return view('conferencistas.edit',[
            'conferencista'=> $conferencista
        ]);
    }
}
