<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Publicaciones extends FormRequest
{

    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'autorid'=>'required',
            'titulo'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'habitaciones'=>'required',
            'baños'=>'required',
            'estacionamiento'=>'required',
        ];
    }
}
