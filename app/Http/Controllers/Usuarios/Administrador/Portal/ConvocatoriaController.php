<?php

namespace App\Http\Controllers\Usuarios\Administrador\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portal\Convocatoria;
use App\Models\Ejercicio;
use Illuminate\Support\Facades\Storage;

class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias = Convocatoria::orderBy('id','ASC')->get();
        $ejercicios = Ejercicio::all();
        return view('usuarios.administrador.portal.convocatoria.index')
        ->with('convocatorias',$convocatorias)
        ->with('ejercicios',$ejercicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //archivo1
        $path1="";
        $path2="";

        if (isset($request->imagenConvocatoria)) {
            $file1 =$request->imagenConvocatoria;
            $nombre1 = $file1->getClientOriginalName();
        
            $path1 = $file1->storeAs('public/portal/convocatorias',$nombre1);
        }
        
        if (isset($request->imagenResultado)) {
            $file2 =$request->imagenResultado;
            $nombre2 = $file2->getClientOriginalName();
            $path2 = $file2->storeAs('public/portal/convocatorias',$nombre2);
        }
       
       
        $convocatoria = new Convocatoria();
        $convocatoria->nombre = $request->nombre;
        $convocatoria->ejercicio_id = $request->ejercicio_id;
        $convocatoria->imagenConvocatoria = substr($path1,6);
        $convocatoria->imagenResultado = substr($path2,6);
        $convocatoria->save();
        return back()->with('message_success','Convocatoria Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $convocatoria = Convocatoria::find($request->convocatoria_id);
        $convocatoria->fill($request->all());
        //archivo1
        $path1="";
        $path2="";

        if (isset($request->imagenConvocatoria)) {
            $file1 =$request->imagenConvocatoria;
            $nombre1 = $file1->getClientOriginalName();
        
            $path1 = $file1->storeAs('public/portal/convocatorias',$nombre1);
            $convocatoria->imagenConvocatoria =substr($path1,6);
        }
        if (isset($request->imagenResultado)) {
            $file2 =$request->imagenResultado;
            $nombre2 = $file2->getClientOriginalName();
            $path2 = $file2->storeAs('public/portal/convocatorias',$nombre2);
            $convocatoria->imagenResultado =substr($path2,6);
        }
       
        $convocatoria->nombre = $request->nombre;
        $convocatoria->ejercicio_id = $request->ejercicio_id;
        $convocatoria->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convocatoria = Convocatoria::find($id);
        $convocatoria->delete();
        return back()->with('message_success','Convocatoria eliminada correctamente');
    }
}
