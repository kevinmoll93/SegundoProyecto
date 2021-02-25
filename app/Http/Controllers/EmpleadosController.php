<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use illuminate\support\facades\storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleados::paginate(4);
        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado=request()->all();
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'DNI' => 'required|string|max:100',
            'Direccion' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $datosEmpleado=request()->except('_token');

        if($request->hasFile('Foto'))
        {
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleados::insert($datosEmpleado);


       // return response()->json($datosEmpleado);
       return redirect('empleados')->with('Mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleados::findOrFail($id);

        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'DNI' => 'required|string|max:100',
            'Direccion' => 'required|string|max:100',
            'Telefono' => 'required|string|max:100',
            'Correo' => 'required|email',
            
        ];
        if($request->hasFile('Foto'))
        {
            $campos+=['Foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
        }
        
        $mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $datosEmpleado=request()->except(['_token','_method']);

        if($request->hasFile('Foto'))
        {
            $empleado=Empleados::findOrFail($id);

            unlink(storage_path('app/public/'.$empleado->Foto));

            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleados::where('id','=',$id)->update($datosEmpleado);

        //$empleado=Empleados::findOrFail($id);

        //return view('empleados.edit', compact('empleado'));
        return redirect('empleados')->with('Mensaje','Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=Empleados::findOrFail($id);

       if(unlink(storage_path('app/public/'.$empleado->Foto)))
       {
        Empleados::destroy($id);
       }

        
        //return redirect('empleados');
        return redirect('empleados')->with('Mensaje','Empleado Eliminado');
    }
}
