<div>
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($conferencistas as $conferencista)
      <div class="p-6 text-gray-900 dark:text-gray-100 text-sm md:flex md:justify-between md:items-center">
        <div class="space-y-3">
          <a href="#" class="text-xl font-bold">
            Nombre : {{ $conferencista->nombre }}    {{ $conferencista->apellido }}
          </a>
          {{-- <p class="text-sm text-gray-600 font-bold ">
           
          </p> --}}
          <p class="text-sm text-gray-500 font-bold ">
           Cedula: {{ $conferencista->cedula }}
          </p>
          <p class="text-sm text-gray-500 font-bold ">
            Ciudad: {{ $conferencista->ciudad }}
           </p>
           <p class="text-sm text-gray-500 font-bold ">
            Direccion: {{ $conferencista->direccion }}
           </p>
           <p class="text-sm text-gray-500 font-bold ">
            Fecha de Nacimiento: {{ $conferencista-> fecha_nacimiento }}
           </p>
           <p class="text-sm text-gray-500 font-bold ">
            Correo : {{ $conferencista-> email }}
           </p>
           <p class="text-sm text-gray-500 font-bold ">
            Telefono : {{ $conferencista->telefono }}
           </p>
           <p class="text-sm text-gray-500 font-bold ">
            Empresa : {{ $conferencista->empresa }}
           </p>
        </div>

        <div class="flex flex-col md:flex-row items-strech gap-3 mt-5 md:mt-0">
            <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
              Candidatos
            </a>
            <a href="{{route('conferencista.edit', $conferencista->id)}}" class="bg-slate-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
              Editar
            </a>
            <button 
            wire:click="$dispatch('mostrarAlerta',[{{ $conferencista->id}}])" 
            class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
            >
              Eliminar
            </button>
        </div>
      </div>
    
      @empty
        <p class="p-3 text-center text-sm text-gray-600"> No hay conferencistas que mostrar </p>
    @endforelse 

  </div>
    <div class="flex justify-center mt-10">
      {{-- {{ $conferencistas->links() }} --}}
    </div>   
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> 
  
      Livewire.on('mostrarAlerta', (conferencistaId )=>{
        Swal.fire({
            title: '¿ Eliminar conferencista ?',
            text: "Una conferencista eliminada, no se puede recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
          if (result.isConfirmed) {
            Livewire.dispatch('eliminarconferencista', conferencistaId);
            Swal.fire(
              'Eliminado!',
              'La conferencista ha sido eliminada',
              'success'
            )
          }
        })
    })
    </script>
@endpush
