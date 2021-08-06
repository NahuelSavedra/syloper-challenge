<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'comentario' => 'required|string|min:10',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Debe completar el campo :attribute',
            'min' => 'El campo :attribute debe tener al menos :min caracteres',
            'max' => 'El campo :attribute no bebe superar :max caracteres',
            'email' => 'Debe ingresar un mail correcto',
        ];
    }
}
