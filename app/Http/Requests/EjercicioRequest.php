<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjercicioRequest extends FormRequest
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
            'año'=>'unique:ejercicios',
           
        ];
    }

    public function messages()
    {
        return [
            'año.unique'=>'El año que intentas ingresar ya existe',            
                        
        ];
    }
}
