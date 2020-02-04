<?php

namespace App\Http\Controllers\Usuarios\Dependencia\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Asm;
use App\Models\Evaluacion;
use App\Models\Actividad;
use App\Models\Prioridad;
use App\Models\Actor;
use Validator;

class AccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $asm_id;
    private $actividad_id;
    public function index($id,$evaluacion)
    {
        $prioridades = Prioridad::all();
        $evaluacion = Evaluacion::find($evaluacion);
        $asm = Asm::find($id);

        return view('usuarios.dependencias.asm.actividades.index')
        ->with('asm',$asm)
        ->with('prioridades',$prioridades)
        ->with('evaluacion',$evaluacion);
    }

    //Este metodo pertenece a AsmController
    public function detalles($asm,$evaluacion)
    {
        $evaluacion = Evaluacion::findOrFail($evaluacion);
        $asm = Asm::find($asm);
        $actores = Actor::all();

        return view('usuarios.dependencias.asm.actividades.detalles')
        ->with('asm',$asm)
        ->with('actores', $actores)
        ->with('evaluacion',$evaluacion);
    }

    public function store(Request $request,Asm $asm)
    {
       $this->asm_id=$asm->id;
        $validator = Validator::make($request->all(), [
			'ponderacion' => [
				'required',
				function ($attribute, $value, $fail) {
                    $porcentaje = Actividad::where('asm_id',$this->asm_id)->sum('ponderacion');
                    $cantidad = 100 - $porcentaje;
					if ($value <= 0) {
                        $fail('No se puede crear una actividad menor o igual 0% de ponderación ');
                    }elseif($value <= $cantidad){

                    }else{
						if ($porcentaje>=100) {
							$fail('Esta actividad ya ha completado su 100%');
						}else{
							$fail('El avance en porcentaje que intentas ingresar sobrepasa los limites del 100% debes insertar una cantidad entre 1 y'.' '.$cantidad.'.');
						}

					}

				},
            ],
            'actividad'=> ['required','max:255'],
            'area_responsable'=> ['required'],
            'prioridad_id'=> ['required'],
            'fecha_termino'=> ['required','date'],
            'resultados_esperados'=> ['required'],
            'evidencias'=> ['required'],
        ]);


        if ($validator->fails()) {
			return back()
			->withErrors($validator)
			->withInput();
		}

        $actividad = new Actividad();
        $actividad->fill($request->all());
        $actividad->asm_id=$asm->id;
        $actividad->estatus_id=5;
        $actividad->prioridad_id=$request->prioridad_id;
        $actividad->save();
        // \Session::flash('sweet_success', 'Bienvenido al sistema de registro para despachos evaluadores. Por favor proporcione la siguiente información para iniciar con el proceso.');
        return back()
        ->with('sweet_success_ok','Actividad creada correctamente');
    }



    public function update(Request $request, $id)
    {
        $acti= Actividad::find($request->actividad_id);
        $this->asm_id=$acti->asm_id;
        $this->actividad_id=$request->actividad_id;
         $validator = Validator::make($request->all(), [
			'ponderacion' => [
				'required',
				function ($attribute, $value, $fail) {

                    //capturo el valor total de ponderacion que hay
                    $porcentaje = Actividad::where('asm_id',$this->asm_id)->sum('ponderacion');
                    //capturo el valor por el cual se quiere remplazar la ponderacion
                    $actividad = Actividad::find($this->actividad_id)->ponderacion;
                    //$deduccion resta el porcentaje total que hay - la ponderacion de la actividad
                    $deduccion = $porcentaje - $actividad;
                    //comparamos que el nuevo valor que querramos insertar no sobrepase los limites del 100%
                    if ($value <= 0) {
                        $fail('No se puede crear una actividad menor o igual 0% de ponderación ');
                    }elseif($deduccion+$value <=100){

                    }else{
                        	$fail('El avance en porcentaje que intentas ingresar sobrepasa los limites del 100%');
                    }



				},
            ],
            'actividad'=> ['required','max:255'],
            'area_responsable'=> ['required'],
            'prioridad_id'=> ['required'],
            'fecha_termino'=> ['required','date'],
            'resultados_esperados'=> ['required'],
            'evidencias'=> ['required'],
        ]);

        if ($validator->fails()) {
			return back()
			->withErrors($validator,'edit')
			->withInput();
        }

       $actividad=Actividad::findOrFail($request->actividad_id);
       $actividad->fill($request->all());
       $actividad->save();
       return back();
    }


}
