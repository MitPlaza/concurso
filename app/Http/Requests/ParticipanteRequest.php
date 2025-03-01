<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ParticipanteRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a hacer esta solicitud.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Personaliza la respuesta cuando la validación falla.
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()->withInput()->withErrors($validator)->with('scroll_to', 'formulario')
        );
    }

    /**
     * Reglas de validación.
     */
    public function rules()
    {
        return [
            'nombretutor' => 'required|min:2|max:255',
            'apellidotutor' => 'required|min:2|max:255',
            'nombrebebe' => 'required|min:2|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'telefono' => 'required|min:9|max:15',
            'direccion' => 'required|min:2',
            'nacimiento' => 'required',
            'imagen' => ['required', File::image()->max(2 * 1024)],
            'sexo' => 'required|in:Niña,Niño',
        ];
    }

    /**
     * Mensajes personalizados de validación.
     */
    public function messages()
    {
        return [
            'nombretutor.required' => 'El nombre es obligatorio.',
            'apellidotutor.required' => 'El apellido es obligatorio.',
            'nombrebebe.required' => 'El Nombre de tu bebé es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Por favor, ingresa un correo electrónico válido.',
            'telefono.required' => 'El Teléfono es obligatorio.',
            'direccion.required' => 'La dirección es obligatoria.',
            'nacimiento.required' => 'Debes indicar la fecha de nacimiento de tu bebé.',
            'imagen.required' => 'Debes subir una imagen.',
            'imagen.max' => 'La imagen no debe superar los 2MB. Por favor, sube una imagen más liviana.',
            'sexo.required' => 'Debes seleccionar el sexo de tu bebé.',
            'sexo.in' => 'La opción seleccionada no es válida.',
        ];
    }
}
