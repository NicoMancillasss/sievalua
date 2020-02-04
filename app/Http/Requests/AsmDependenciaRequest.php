<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsmDependenciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'asm'=>'required|max:1000',
            'prioridad_justificacion'=>'required|max:255',
            'justificacion_accion'=>'required|max:255',
            'temas'=>'required',
            'actores'=>'required',
            'accion_id'=>'required',
            'prioridad_id'=>'required',
            'tipo_evaluacion_id'=>'required',
            'resultados_esperados'=>'required|max:255',
            'evidencia'=>'required|max:100',
            'fecha_termino'=>'required',
            'documento_referencia'=>'required',
        ];
    
    }
}
