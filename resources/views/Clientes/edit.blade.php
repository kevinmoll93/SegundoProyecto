<link rel="stylesheet" href={{url('css/app.css')}}>
<form action="{{url('/clientes/'.$cliente->id)}}" method="post">
    {{ csrf_field() }}
    {{method_field('PATCH')}}

    @include('clientes.form',['Modo'=>'editar'])
    
    
</form>