<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeletePostRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación para la solicitud.
     */
    public function rules()
    {
        return [
            'post_id' => 'required|exists:posts,id',
        ];
    }
}
