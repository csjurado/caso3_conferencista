<?php

namespace App\Livewire;
use App\Models\Conferencista;
use Livewire\Component;

class MostrarConferencista extends Component
{


    
    public function render()
    {
        // $conferencistas= Conferencista::where('nombre',auth()->user()->id)->paginate(10);
        // return view(
        //     'livewire.mostrar-conferencista',[
        //         'conferencistas'=>$conferencistas
        // ]);


        $conferencistas= Conferencista::get();
        return view('livewire.mostrar-conferencista', compact('conferencistas'));
    }
}
