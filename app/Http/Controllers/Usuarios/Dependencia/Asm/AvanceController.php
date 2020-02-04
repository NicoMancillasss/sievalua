<?php

namespace App\Http\Controllers\Usuarios\Dependencia\Asm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Avance;
use App\Models\Evaluacion;
use Validator;
use Illuminate\Support\Facades\Storage;
class AvanceController extends Controller
{
	private $actividad_id;

	public function create(Actividad $actividad,$evaluacion)
	{

		$evaluacion = Evaluacion::find($evaluacion);
		$avances = Avance::where('actividad_id',$actividad->id)->get();

		return view('usuarios.dependencias.asm.actividades.avance.create')
		->with('avances',$avances)
		->with('evaluacion',$evaluacion)
		->with('actividad',$actividad);
	}

	public function store(Request $request,$id)
	{
		$this->actividad_id=$id;
		$validator = Validator::make($request->all(), [
			'porcentaje_avance' => [
				'required',
				function ($attribute, $value, $fail) {
					$porcentaje = Avance::where('actividad_id',$this->actividad_id)->sum('porcentaje_avance');
					$cantidad = 100 - $porcentaje;
					if ($value <= $cantidad) {

					}else{
						if ($porcentaje==100) {
							$fail('Esta actividad ya ha completado su 100
								%');
						}else{
							$fail('El avance en porcentaje que intentas ingresar sobrepasa los limites del 100% debes insertar una cantidad entre 1 y'.' '.$cantidad.'.');
						}

					}

				},
			],
			'observacion'=>['required'],
			'documento_probatorio'=>['required']
		]);

		if ($validator->fails()) {
			return back()
			->withErrors($validator)
			->withInput();
		}
		$actividad = Actividad::find($id);
		$archivo =$request->file('documento_probatorio');
          //return response()->download($url);
         $nombre = $archivo->getClientOriginalName();
         $validator = $request->validate([
          'documento_probatorio' => 'max:10000',

        ]);
         //la ruta guardara el documento probatorio en la carpeta con el id de la actividad .
         $path = $archivo->storeAs('public/dependencias/'.$actividad->asm->evaluacion->dependencia->acronimo.'/'.'avances/'.'actividad'.$actividad->id,$nombre);
         $quita=substr($path,6);

		$avance = new Avance();
		$avance->fill($request->all());
		$avance->documento_probatorio=$quita;
        $avance->actividad_id=$id;
        $avance->estatus_id=1;
		$avance->save();
		return back();




	}

	public function destroy($id)
	{
		$avance = Avance::findOrFail($id);
		$avance->delete();
		return back();
	}

	public function edit(Request $request)
	{
		$avance = Avance::findOrFail($request->correccion_avance_id);
		$actividad = Actividad::findOrFail($avance->actividad_id);
		Storage::delete('public/'.$avance->documento_probatorio);
		$archivo =$request->file('documento_probatorio');
		$nombre = $archivo->getClientOriginalName();
		$path = $archivo->storeAs('public/dependencias/'.$actividad->asm->evaluacion->dependencia->acronimo.'/'.'avances/'.'actividad'.$actividad->id,$nombre);
		$quita=substr($path,6);

		$avance->observacion = $request->observacion;
		$avance->documento_probatorio=$quita;
		$avance->estatus_id = 1;



		$avance->save();
		return back()->with('message_success','Correccion guardada correctamente');
	}
}
