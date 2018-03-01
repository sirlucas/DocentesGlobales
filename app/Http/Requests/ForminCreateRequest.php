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
          'nombres'                     => 'required | max:50',
          'rut'                         => 'required',
          'email'                       => 'required',
          'telefono'                    => 'required',
          'dom_cargo_id'                => 'required',
          'dom_unidad_id'               => 'required',
          'dom_carrera_id'              => 'required',
          'dom_sede_id'                 => 'required',
          'institucion_anf'             => 'required',
          'inst_descripcion'            => 'required',
          'website'                     => 'required',
          'contacto_anf'                => 'required',
          'cont_cargo'                  => 'required',
          'cont_email'                  => 'required',
          'cont_fono'                   => 'required',
          'fecha_ida'                   => 'required',
          'fecha_retorno'               => 'required',
          'dom_clasificacion_id'        => 'required',
          'proposito'                   => 'required',
          'dom_actividad_id'            => 'required',
          'dom_ciudad_id'               => 'required',
          'duracion_act'                => 'required',
          'Incluido_en_plan_de_trabajo' => 'required',
          'inscripcion'                 => 'required',
          'arancel'                     => 'required',
          'pasajes'                     => 'required',
          'viatico'                     => 'required',
          'otros'                       => 'required',
          'total'                       => 'required',
          'currency_id'                 => 'required',
          'observaciones'               => 'required',
        ];
    }
}
