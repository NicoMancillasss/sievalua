<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoEspecificoRequest extends FormRequest
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
            'curricula_personal'=>'mimes:pdf|max:10000',
            'propuesta_trabajo'=>'mimes:pdf|max:10000',
            'carta_manifestacion'=>'mimes:pdf|max:10000',
            'propuesta_economica'=>'mimes:pdf|max:10000',
            'cronograma_actividades'=>'mimes:pdf|max:10000',
        ];
    }


    public function messages()
    {
        return [
            'curricula_personal.mimes'=>'El documento Curricula_personal no es un pdf',
            'propuesta_trabajo.mimes'=>'El documento Propuesta de trabajo no es un pdf',
            'carta_manifestacion.mimes'=>'El documento Carta manifestacionno es es un pdf',
            'propuesta_economica.mimes'=>'El documento Propuesta Ecónomica no es un pdf',
            'cronograma_actividades.mimes'=>'El documento Cronograma de atividades no es un pdf',
            'curricula_personal.max'=>'Tamaño de Curricula del Personal no Válido',
        ];
    }
}
