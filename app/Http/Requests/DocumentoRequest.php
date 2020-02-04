<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
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
            'padron_provedores'=>'mimes:pdf|max:10000',
            'acta_constitutiva'=>'mimes:pdf|max:10000',
            'experiencia'=>'mimes:pdf|max:10000',
            'obligaciones_fiscales'=>'mimes:pdf|max:10000',
           
        ];
    }


   }
