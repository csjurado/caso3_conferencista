<?php

namespace App\Livewire;
use App\Models\Conferencista;
use Livewire\Component;

class CrearConferensista extends Component
{
    // Definimos las varaibles que van a ir a la base de datos  
    public $nombre;
    public $apellido;
    public $cedula;
    public $genero;
    public $ciudad;
    public $direccion;
    public $fecha_nacimiento;
    public $telefono;
    public $email;
    public $empresa;

    protected $rules = [
        'nombre'=>'required|string',
        'apellido'=>'required|string',
        'cedula'=>'required|max:10|min:10',
        'genero'=>'required',
        'ciudad'=>'required|string',
        'direccion'=>'required|string',
        'fecha_nacimiento'=>'required',
        'telefono'=>'required',
        'email'=>'required|email',
        'empresa'=>'required',

        // 'imagen'=>'required|image|max:1024'
    ];

    public function crearConferencista()
    {
        $datos = $this->validate();
        //Almacenar la imagen
        // $imagen =$this->imagen->store('public/vacantes');
        // $datos['imagen'] = str_replace('public/vacantes/','',$imagen);
        // dd($nombre_imagen );

        //Crear la vacante
        Conferencista::create([
            'nombre'=>$datos['nombre'],
            'apellido'=>$datos['apellido'],
            'cedula'=>$datos['cedula'],
            'genero'=>$datos['genero'],
            'ciudad'=>$datos['ciudad'],
            'direccion'=>$datos['direccion'],
            'fecha_nacimiento'=>$datos['fecha_nacimiento'],
            'telefono'=>$datos['telefono'],
            'email'=>$datos['email'],
            'empresa'=>$datos['empresa'],
        ]);
        //Crear un Mensaje

        session()->flash('mensaje','El Conferencista se ha creado correctamente');

        //Redireccionar al usuario
        return redirect()->route('conferencista.index');
    }



    public function render()
    {
        return view('livewire.crear-conferensista');
    }
}
