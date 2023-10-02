<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearConferencista'>

    <div >
        <x-input-label for="nombre" :value="__('Nombre del Conferencista ')" />
        <x-text-input 
        id="nombre" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="nombre" 
        :value="old('nombre')"  
        placeholder="Carlos"
        />
        @error('nombre')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="apellido" :value="__('Apellido del Conferencista ')" />
        <x-text-input 
        id="apellido" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="apellido" 
        :value="old('apellido')"  
        placeholder="Fernandez"
        />
        @error('apellido')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="cedula" :value="__('Cedula del Conferencista ')" />
        <x-text-input 
        id="cedula" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="cedula" 
        :value="old('cedula')"  
        placeholder="1725xxxxxx96"
        />
        @error('cedula')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="genero" :value="__('Genero')" />
        <select 
        id="genero" 
        wire:model="genero" 
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
        focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option value="">Selecciona un genero </option>
        <option value="1">Masculino </option>
        <option value="2">Femenino </option>
        
        </select>
        @error('genero')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>


    <div >
        <x-input-label for="ciudad" :value="__('Cedula del Conferencista ')" />
        <x-text-input 
        id="ciudad" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="ciudad" 
        :value="old('ciudad')"  
        placeholder="Quito, Guayaquil"
        />
        @error('ciudad')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="direccion" :value="__('Direccion de la Conferencia')" />
        <textarea 
        wire:model="direccion" 
        placeholder="Direccion de la conferencia " 
        class="rounded-md shadow-sm border-gray-300
        focus:border-indigo-300 focus:ringfocus:ring-indigo-200 
        focus:ring-opacity-50 w-full"> 
    </textarea>
        @error('direccion')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />
        <x-text-input 
        id="fecha_nacimiento" 
        class="block mt-1 w-full" 
        type="date" 
        wire:model="fecha_nacimiento" 
        :value="old('fecha_nacimiento')" />
        @error('fecha_nacimiento')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="telefono" :value="__('Telefono del Conferencista ')" />
        <x-text-input 
        id="telefono" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="telefono" 
        :value="old('telefono')"  
        placeholder="098855xxxx36"
        />
        @error('telefono')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="email" :value="__('Email del Conferencista ')" />
        <x-text-input 
        id="email" 
        class="block mt-1 w-full" 
        type="email" 
        wire:model="email" 
        :value="old('email')"  
        placeholder="correo@gmail.com"
        />
        @error('email')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="empresa" :value="__('Empresa del Conferencista ')" />
        <x-text-input 
        id="empresa" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')"  
        placeholder="Uber , Amazon"
        />
        @error('empresa')
           <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>










    {{-- <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
        id="salario" 
        wire:model="salario" 
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
        focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option value="">Selecciona un salario </option>
        
        </select>
        @error('salario')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select 
        id="categoria" 
        wire:model="categoria" 
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
        focus:ring-indigo-200 focus:ring-opacity-50 w-full">
        <option value="">Selecciona una categoria </option>
       
        </select>
        @error('categoria')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div >
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
        id="empresa" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="empresa" 
        :value="old('empresa')"  
        placeholder="Empresa ej: Netflix, Uber"/>
        @error('empresa')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div> --}}

    {{-- <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia de postulacion')" />
        <x-text-input 
        id="ultimo_dia" 
        class="block mt-1 w-full" 
        type="date" 
        wire:model="ultimo_dia" 
        :value="old('ultimo_dia')" />
        @error('ultimo_dia')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del puesto')" />
        <textarea 
        wire:model="descripcion" 
        placeholder="Descripcion general del puesto, experiencia" 
        class="rounded-md shadow-sm border-gray-300
        focus:border-indigo-300 focus:ringfocus:ring-indigo-200 
        focus:ring-opacity-50 w-full"> 
    </textarea>
        @error('descripcion')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
        id="imagen" 
        wire:model="imagen" 
        type="file" 
        class="block mt-1 w-full" 
        />
        <div class="my-5 w-80">
           
        </div>

        @error('imagen')
        <livewire:mostrar-alerta :mensaje="$message"/>
        @enderror
    </div> --}}
    <x-primary-button class="w-full justify-center">
        Crear Nuevo Conferencista
    </x-primary-button >

</form>