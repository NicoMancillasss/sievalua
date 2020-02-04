<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsmDespachoRequest extends FormRequest
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
            'asm'=>'required',
            'prioridad_justificacion'=>'required',
            'justificacion_accion'=>'required',
            'recomendacion'=>'required',
            'temas'=>'required',
            'actores'=>'required',
            'accion_id'=>'required',
            'prioridad_id'=>'required',
           // 'programa_id'=>'required',
           // 'dependencia_id'=>'required',
           // 'despacho_id'=>'required',
            'tipo_evaluacion_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'asm.required'=>'El campo hallazgo es requerido',
            'actores.required'=>'Debe seleccionar un actor',
        ];
    }
}
