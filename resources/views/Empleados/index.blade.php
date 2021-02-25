<link rel="stylesheet" href={{url('css/app.css')}}>
@if (Session::has('Mensaje'))
<div class="mt-4"></div>
        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
<div class="text-xl font-normal  max-w-full flex-initial">
{{
    Session::get('Mensaje')
}}</div>
<div class="flex flex-auto flex-row-reverse">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </div>
</div>
</div>

    
@endif

<br>
<br>
<a href="{{url('empleados/create')}}"class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Agregar empleado</a>
<br>
<br>

<div class="md:px-1 py-0 w-full">
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">

      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Foto</th>
            
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">DNI</th>
          <th class="w-1/3 text-left py-3 px-10 uppercase font-semibold text-sm">Direccion</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Correo</th>
          <th class="w-1/3 text-left py-3 px-15 uppercase font-semibold text-sm">Acciones</th>
          
        </tr>
    </thead>

    <tbody class="text-gray-700">
       @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto}}" class="border-2 border-blue-500 border-opacity-25 hover:border-red-500 ..." alt="" width="100">
                </td>

                <td class="w-1/3 text-left py-3 px-4">{{$empleado->Nombre}} {{$empleado->Apellido}}</td>
                <td class="w-1/3 text-left py-3 px-4">{{$empleado->DNI}}</td>
                <td class="w-1/3 text-left py-3 px-4">{{$empleado->Direccion}}</td>
                <td class="text-left py-3 px-4">{{$empleado->Telefono}}</td>
                <td class="text-left py-3 px-4">{{$empleado->Correo}}</td>
            <td>
              
                <a class="w-1/3 text-left py-2 px-5 bg-transparent hover:bg-yellow-300 text-yellow-500 font-semibold hover:text-white py-2 px-4 border border-yellow-300 hover:border-transparent rounded" href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>


                <form action="{{url('/empleados/'.$empleado->id)}}" method="post" style="display:inline">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    
                    <button class="py-2 px-5 bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" type="submit" onclick="return confirm ('¿Borrar?');">Borrar</button>
    
    
                    </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
{{$empleados->links() }}
<br>
<div class="inline-flex">
<a href="{{url('dashboard')}}"class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">Regresar</a>

</body>
</div>


