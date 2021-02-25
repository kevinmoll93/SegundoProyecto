<div class="mx-auto container flex items-center" id="nav">
    <div class="w-full pt-2 p-4">

        <div class="mx-auto md:p-6 md:w-1/2">
            <div class="flex flex-wrap justify-between">
                <h1 class="text-2xl text-orange-500 hover:text-orange-500 transition duration-500 p-4">
                    <i class="fas fa-sign-in-alt fa-fw fa-lg"></i>
                    Registrar Empleado
                </h1>
                <a href="{{url('empleados')}}" class="mt-8 text-orange-400 hover:text-orange-600 transition duration-500">
                    <svg class=" w-6 h-6 inline-block align-bottom" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Volver
                    <i class="fas fa-chevron-circle-left fa-fw"></i>
                </a>
            </div>

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    <div class="mb-8">
    <label for="Nombre"class="block text-gray-700 text-sm font-bold mb-2">{{'Nombre'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="text" name="Nombre" id="Nombre" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('Nombre')?'is-invalid':''}} "
    
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
    {!!$errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
    
    </div>
        </div>
        <div class="mb-8">
    <label for="Apellido" class="block text-gray-700 text-sm font-bold mb-2">{{'Apellido'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="text" name="Apellido" id="Apellido" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('Apellido')?'is-invalid':''}}"
    
    value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
    {!!$errors->first('Apellido','<div class="invalid-feedback">:message</div>') !!}
</div>
</div>

<div class="mb-8">
    <label for="DNI" class="block text-gray-700 text-sm font-bold mb-2">{{'DNI'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="number" name="DNI" id="DNI" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('DNI')?'is-invalid':''}}"
    
    value="{{ isset($empleado->DNI)?$empleado->DNI:old('DNI') }}">
    {!!$errors->first('DNI','<div class="invalid-feedback">:message</div>') !!}
</div>
</div>
<div class="mb-8">
    <label for="Direccion" class="block text-gray-700 text-sm font-bold mb-2">{{'Direccion'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="text" name="Direccion" id="Direccion" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('Direccion')?'is-invalid':''}}"
    
    value="{{ isset($empleado->Direccion)?$empleado->Direccion:old('Direccion') }}">
    {!!$errors->first('Direccion','<div class="invalid-feedback">:message</div>') !!}
</div>
</div>
<div class="mb-8">
    <label for="Telefono" class="block text-gray-700 text-sm font-bold mb-2">{{'Telefono'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="tel" name="Telefono" id="Telefono" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('Telefono')?'is-invalid':''}}"
    
    value="{{ isset($empleado->Telefono)?$empleado->Telefono:old('Telefono') }}">
    {!!$errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}
</div>
</div>
    <div class="mb-8">
    <label for="Correo" class="block text-gray-700 text-sm font-bold mb-2">{{'Correo'}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
    <input type="email" name="Correo" id="Correo" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out {{$errors->has('Correo')?'is-invalid':''}}"
    placeholder="you@ejemplo.com"
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
    {!!$errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>
</div>
    <div class="mb-8">
    <label for="Foto" class="block text-gray-700 text-sm font-bold mb-2">{{'Foto'}}</label>
    @if (isset($empleado->Foto))
    <br/>
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
    <br/>
    @endif
    <input class="{{$errors->has('Nombre')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
    {!!$errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}

    
</div>
<input type="submit" class="transition duration-500 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
</div>
    
    
  
