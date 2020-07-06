<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

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
        $datos['empleados']=Empleados::paginate(5);
        return view('empleados.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $DatosEmpleado = request()->except('_token','Subir');//elimina el string del token del json

        //foto:
        if($request->hasFile('Foto')){
            $DatosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');//almacena el dato de la foto en storage/app/public/uploads
        }

        Empleados::insert($DatosEmpleado); //inserta a la base de datos
        return response()->json($DatosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        //
        $empleado = Empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleados::destroy($id);
        return redirect('empleados');
    }
}
