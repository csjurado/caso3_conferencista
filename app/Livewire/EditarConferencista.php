<?php

namespace App\Livewire;
use App\Models\Conferencista;
use Livewire\Component;

class EditarConferencista extends Component
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
     public $conferencista_id;
 
 
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

     public function mount(Conferencista $conferencista)
     {
         $this->nombre= $conferencista->nombre; //Esto no va a funcionar
         $this->apellido= $conferencista->apellido;
         $this->cedula= $conferencista->cedula;
         $this->genero= $conferencista->genero;
         $this->ciudad= $conferencista->ciudad;
         $this->direccion= $conferencista->direccion;
         $this->fecha_nacimiento= $conferencista->fecha_nacimiento;
         $this->telefono= $conferencista->telefono;
         $this->email= $conferencista->email;
         $this->empresa= $conferencista->empresa;
     }
     public function editarConferencista()
     {
         $datos = $this->validate();
 
         //Si hay una nueva imagen
        //  if($this->imagen_nueva){
        //      $imagen=$this->imagen_nueva->store('public/vacantes');
        //      $datos['imagen']=str_replace('public/vacantes/','',$imagen);
        //  }
 
         //Encontrar la vacante a editar 
         $conferencista = Conferencista::get($this->id);
 
         //Asignar los valores 
         $conferencista ->nombre=$datos['nombre'];
         $conferencista ->apellido=$datos['apellido'];
         $conferencista ->cedula=$datos['cedula'];
         $conferencista ->genero=$datos['genero'];
         $conferencista ->ciudad=$datos['ciudad'];
         $conferencista ->direccion=$datos['direccion'];
         $conferencista ->fecha_nacimiento=$datos['fecha_nacimiento'];
         $conferencista ->telefono=$datos['telefono'];
         $conferencista ->email=$datos['email'];
         $conferencista ->empresa=$datos['empresa'];
     
         //Guardar la vacante
         $vacante->save();
         //Redireccionar
         session()->flash('mensaje',' El conferencista ha sido modificado exitosamente!!');
         return redirect()->route('conferencista.index');
     }

    public function render()
    {
        return view('livewire.editar-conferencista');
    }
}
