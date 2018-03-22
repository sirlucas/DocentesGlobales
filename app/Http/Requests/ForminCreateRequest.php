<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForminCreateRequest extends FormRequest
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
          'nombre'                      => 'required | min:6 | max:50',
          'rut'                         => 'required | max:10',
          'email'                       => 'required | email | min: 5 | max: 50',
          'telefono'                    => 'min: 6 | max: 11' ,
          'dom_cargo_id'                => 'required',
          'dom_unidad_id'               => 'required',
          'dom_carrera_id'              => 'required',
          'dom_sede_id'                 => 'required',
          'institucion_anf'             => 'max: 100',
          'inst_descripcion'            => 'max: 150',
          'website'                     => 'max: 100',
          'contacto_anf'                => 'max: 100',
          'cont_cargo'                  => 'max: 50',
          'cont_email'                  => 'min: 5 | email | max: 50',
          'cont_fono'                   => 'min: 6 | max: 11',
          'fecha_ida'                   => 'required',
          'fecha_retorno'               => 'required',
          'dom_clasificacion_id'        => 'required',
          'proposito'                   => 'max: 200',
          'dom_actividad_id'            => 'required',
          'dom_ciudad_id'               => 'required',
          'duracion_act'                => 'max: 4',
          'ipt'                         => 'required | in:Si,No,Por Ingresar',
          'observaciones'               => 'max: 200',
        ];
    }

    public function messages(){
      return [
        'nombre.required' => 'El :attribute es obligatorio.',
        'nombre.min' => 'El :attribute debe tener más de 6 caracteres.',
        'nombre.max' => 'El :attribute debe tener menos de 50 caracteres.',
        'rut.required' => 'El :attribute es obligatorio',
        'rut.max' => 'El :attribute ',
        'email.required' => 'El :attribute es obligatorio',
        'email.min' => 'El :attribute debe tener al menos 5 caracteres',
        'email.max' => 'El :attribute no debe tener más de 50 caracteres',
        'email.email' => 'El :attribute debe ser un email válido',
        'telefono.required' => 'El :attribute es obligatorio',
        'dom_cargo_id.required' => 'Selecciona un :attribute al docente',
      ];
    }

    public function attributes(){
      return [
        'nombre'                      => 'nombre del académico/colaborador',
        'dom_cargo_id'                => 'Cargo',
        'dom_unidad_id'               => 'Unidad académica',
        'dom_carrera_id'              => 'Carrera',
        'dom_sede_id'                 => 'Sede',
        'institucion_anf'             => 'Institución anfitriona',
        'inst_descripcion'            => 'Descripción de la institución',
        'contacto_anf'                => 'Contacto anfitrión',
        'cont_cargo'                  => 'Cargo del Contacto anfitrión',
        'cont_email'                  => 'Email del Contacto anfitrión',
        'cont_fono'                   => 'Telefono del Contacto anfitrión',
        'dom_clasificacion_id'        => 'Clasificación de la actividad',
        'proposito'                   => 'Proposito',
        'dom_actividad_id'            => 'Tipo de Actividad',
        'dom_ciudad_id'               => 'Ciudad',
        'duracion_act'                => 'Duración de la actividad',
      ];
    }
}
