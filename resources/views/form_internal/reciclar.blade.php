@extends('adminlte::layouts.app')

@section('htmlheader_title', 'Recycle Form')

@section('contentheader_title', 'FORMULARIO DE VISITA INTERNACIONAL - INTERNO (Vista Reciclar)')
@section('contentheader_description','International Visit Request Form - Internal (Recycle view)')

@section('main-content')
<div class="row">
  <div class="col-md-12">
    <!-- 5orizontal Form -->
    <div class="box">
      {!! Form::open(['id' => 'form1','route' => 'formin.store', 'method' => 'post']) !!}
      <div class="box-header header-form">
         <p>Este formulario debe ser completado por cualquier académico y/o
          administrativo UDD que visite una institución extranjera y cuyo
        proposito sea una <b>actividad Académica.</b></p>
        <p>This form must be completed by any teacher and/or
          administrative UDD who visits a foreign institution and
          whose purpose is an <b>academic activity.</b></p>
          <div class="pull-left">


          </div>


      </div>

      <!-- box-body -->
    <!--  <div class="box-body"> -->

        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong>
            Hay algunos problemas con los datos ingresados.<br>(There were some problems with your input).<br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif


        {{ csrf_field() }}
        <div id="form-content">

          <h5>Información del profesor<br>(Professor details)</h5>
          <section>
            <!-- panel izquierdo -->
            <div class="col-md-6">

              <div class="form-group">
                  <label for="rut" class="control-label">
                    <br>
                    RUT<span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                  </label>
                  {!! Form::text('rut',$form->rut,['class' => 'form-control', 'required', 'placeholder'=>'112233-1', 'id'=>'rut']) !!}
              </div>



              <div class="form-group">
                <label for="nombre" class="control-label">
                  Nombre del Académico UDD
                  <br>
                  (Name of Academic UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!! Form::text('nombre',$form->nombre,['class' => 'form-control', 'required', 'placeholder'=>'Jhon J. Doe', 'id'=>'nombre']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="email" class="control-label">
                  <br>
                  Email
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!! Form::email('email',$form->email,['class' => 'form-control', 'required', 'placeholder'=>'email@example.com', 'id'=>'email']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="telefono" class="control-label">
                  Número telefónico
                  <br>
                  (Phone number)
                </label>
                {!! Form::text('telefono',$form->telefono,['class' => 'form-control phone', 'placeholder'=>'987654321', 'id'=>'telefono']) !!}
              </div>

              <div class="form-group">
                <label for="unidad" class="control-label">
                  Facultad u otra Unidad UDD
                  <br>
                  (Faculty or other UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('unidad', $unidades->pluck('unidad','id'), $form->unidad->id,['placeholder'=>'Seleccione una unidad','class' => 'form-control select2' ,'required', 'id'=>'unidades'])!!}
              </div>


            </div>
            <!-- ./panel izquierdo -->

            <!-- panel derecho -->
            <div class=" col-md-6">


              <div class="form-group">
                <label for="sede" class="control-label">
                  Sede
                  <br>
                  (Sede)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('sede', $sedes->pluck('sede','id'), $form->sede->id,['placeholder'=>'Selecione una Sede','class' => 'form-control select2' ,'required', 'id'=>'sede'])!!}
              </div>

              <div class="form-group">
                <label for="cargo" class="control-label">
                  Cargo
                  <br>
                  (Position)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('cargo', $cargos->pluck('cargo','id'), $form->cargo->id,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargo'])!!}
              </div>

              <div class="form-group">
                <label for="carreras" class="control-label">
                  Carrera a la que pertenece
                  <br>
                  (Study Plan)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('carreras', $carreras->pluck('carrera','id'), $form->carrera->id,['placeholder'=>'Seleccione una carrera','class' => 'form-control select2' ,'required', 'id'=>'carreras'])!!}
              </div>

              <div id='postitulo' class="form-group hidden">
                <label for="postitulo" class="control-label">
                  <br>
                  ¿Nombre del Programa de Estudio?
                </label>
                {!! Form::text('postitulo',$form->postitulo,['class' => 'form-control', 'placeholder'=>'Ingrese Postítulo al que pertenece', 'required', 'id'=>'postin']) !!}

              </div>


            </div>
            <!-- ./panel derecho -->
            <div class="col-xs-12">
              <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span> Campos obligatorios</small>
            </div>

          </section>

          <h5>Detalles de la Institución <br>(Hosting institution detail)</h5>
          <section>

            <!-- panel izquierdo -->
            <div class="col-md-6">

              <div class="form-group">
                <label for="inst_anf" class="control-label">
                  Nombre de la Institución anfitriona
                  <br>
                  (Name of host Institution)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!! Form::text('inst_anf',$form->institucion_anf,['class' => 'form-control', 'placeholder'=>'University - Example', 'required', 'id'=>'inst_anf']) !!}
              </div>

              <div class="form-group">
                <label for="website" class="control-label">
                  Página web
                  <br>
                  (Website)
                </label>
                {!! Form::text('website',$form->website,['class' => 'form-control', 'placeholder'=>'https://www.example.cl', 'id'=>'website']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="pais" class="control-label">
                  País
                  <br>
                  (Country)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!!Form::select('pais', $countries->pluck('pais','id'), $form->ciudad->pais->id,['placeholder'=>'Selecciona un País','class' => 'form-control  select2' ,'required', 'id'=>'countries'])!!}
              </div>

              <div class="form-group col-sm-6">
                <label for="cities" class="control-label">
                  Ciudad o Estado
                  <br>
                  (City or State)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <select  id="cities" class="form-control select2" name="cities">
                  <option value="{{$form->ciudad->id}}" selected>{{$form->ciudad->ciudad}}</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="inst_descripcion" class="control-label">
                  Proporcione una breve descripcion de la institución que visita
                  <br>
                  (Please provide a brief description of the host institution)
                </label>
                {!! Form::textarea('inst_descripcion',$form->inst_descripcion,['class' => 'form-control', 'id'=>'comentarios', 'rows' => '2']) !!}
              </div>

              <div class="form-group">
                <label class="control-label">
                  Fecha de visita
                  <br>
                  (Date of visit)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::text('ida_retorno',null,['class' => 'form-control', 'required', 'id'=>'ida_retorno']) !!}
                </div>
                <!-- /.input group -->
              </div>

            </div>
            <!-- panel izquierdo -->

            <!-- panel derecho -->
            <div class="col-md-6">

            <div class="form-group">
              <label for="actividad_nombre" class="control-label">
                Nombre de la actividad
                <br>
                (Name of Activity)
              </label>
              {!! Form::text('actividad_nombre',$form->actividad_nombre,['class' => 'form-control', 'required', 'id'=>'actividad_nombre']) !!}
            </div>

              <div class="form-group">
                <label for="actividad" class="control-label">
                  Type of activity to perform during your visit
                  <br>
                  (Tipo de actividad a realizar en us visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('actividad', $actividades->pluck('actividad','id'), $form->actividad->id,['placeholder'=>'Seleccione una actividad','class' => 'form-control select2' ,'required', 'id'=>'actividades'])!!}
              </div>

              <div class="form-group">
                <label for="plantrabajo">
                ¿Actividad incluida en su plan de trabajo?
                <br>
                Activity included in your work plan?
                </label>
                <select name="plantrabajo"  required class="form-control select2">
                  <option value="{{$form->ipt}}" selected>{{$form->ipt}}</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Por Ingresar">Por Ingresar</option>
                </select>
              </div>

              <div class="form-group">
                <label for="clasis" class="control-label">
                  Seleccione un aréa de clasificación de su visita
                  <br>
                  (Select a rating area of your visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('clasis', $clasis->pluck('clasificacion','id'), $form->clasificacion->id,['placeholder'=>'Selecione una opción','class' => 'form-control select2' ,'required', 'id'=>'clasificacion'])!!}
              </div>

              <div class="form-group">
                <label for="proposito" class="control-label">
                  ¿Cuál es el proposito principal de su visita, cuáles son los resultados esperados?
                  <br>
                  (What is the main purpose of your visit and what are the desired outcomes?)
                </label>
                {!! Form::textarea('proposito',$form->proposito,['class' => 'form-control','rows' => '2', 'id'=>'proposito']) !!}
              </div>
            </div>
            <!-- ./panel derecho -->

            <div class="col-xs-12">
              <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span> Campos obligatorios</small>
            </div>

          </section>
          <!-- ./tab panel 2 -->

          <!-- tab panel 3 -->
          <h5>Relaciones Existentes<br>(Existing Relationships) </h5>
          <section>

            <!-- panel izquierdo -->
            <div class="col-sm-6">
              <b>Contacto en la insititución (Contact at foreign institution)</b>
              <div class="form-group">
                <label for="contacto_anf" class="control-label">
                  Nombre
                  <br>
                  (Name)
                </label>
                <input  name="contacto_anf" class="form-control" placeholder="Jhon J. Doe" type="text">
              </div>

              <div class="form-group">
                <label for="cargo_anf" class="control-label">
                  Cargo
                  <br>
                  (Position)
                </label>
                <input name="cargo_anf"class="form-control"  type="text">
              </div>

              <div class="form-group col-sm-6">
                <label for="email_anf" class="control-label">
                  Correo Electrónico
                  <br>
                  (Email)
                </label>
                <input id='email_anf' type="email" class="form-control" name="email_anf" placeholder="email@example.com">
              </div>

              <div class="form-group col-sm-6">
                <label for="fono_anf" class="control-label">
                  Número telefónico
                  <br>
                  (Phone number)
                </label>
                <input id='fono_anf' type="text" class="form-control" name="fono_anf">
              </div>

            </div>
            <!-- ./panel izqueirdo -->

            <!-- panel derecho -->
            <div class="col-sm-6">



            </div>
            <!-- ./panel derecho -->

          </section>

          <!-- tab panel 4 -->
          <h5>Otros<br>(Others)</h5>
          <section>

            <!--panel izquierdo-->
            <div class="col-sm-4 pull-left">

              <div class="form-group">
                <label for="colaboracion" class="control-label">
                  ¿Tiene la institutión anfitriona acuerdos o algún otro tipo de colaboración conal UDD?, por favor especifique.
                  <br>
                  (Does the host institution have any existing agreements or other kinds of collaboration with UDD?, please specify.)
                </label>
                <textarea class="form-control" rows="3" name="colaboracion"></textarea>
              </div>

              <div class="form-group">
                <label for="observaciones" class="control-label">
                  Observaciones
                  <br>
                  (Comments)
                </label>
                <textarea class="form-control" rows="3" name="observaciones"></textarea>
              </div>

            </div>

            <!--panel derecho-->
            <div class="col-sm-8">

              <div class="form-group">
                <label for="aportes" class="control-label">
                  Detalle del aporte solicitado
                  <br>
                  (Contribution detail requested)
                </label>
                <div class="table-responsive no-padding">
                <table id="aporte" class="table table-bordered">
                  <thead>
                    <tr>
                      <td><span class="fa fa-asterisk" style="font-size:7px;"></span><span class="fa fa-asterisk" style="font-size:7px;"></span>Cuenta</td>
                      <td>
                        {!!Form::select('currency', $divisas->pluck('currency','id'), 1,['placeholder'=>'Select Currency','class' => 'form-control select2' ,'required', 'id'=>'currency'])!!}
                      </td>
                      <td>Centro de Gestión</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>inscripcion<br>matricula</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="matricula">
                        </div>
                      </td>
                      <td>
                        {!!Form::select('cgestionm', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                      </td>
                    </tr>
                    <tr>
                      <td>Arancel</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="arancel">
                        </div>
                      </td>
                      <td>
                        {!!Form::select('cgestiona', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                      </td>
                    </tr>
                    <tr>
                      <td>Pasajes</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="pasajes">
                        </div>
                      </td>
                      <td>
                        {!!Form::select('cgestionp', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                      </td>
                    </tr>
                    <tr>
                      <td>Viático</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="viaticos">
                        </div>
                      </td>
                      <td>
                        {!!Form::select('cgestionv', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                      </td>
                    </tr>
                    <tr>
                      <td>Otros</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="otros">
                        </div>
                      </td>
                      <td>
                        {!!Form::select('cgestiono', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                      </td>
                    </tr>
                    <tr class="info">
                      <td><b>Total:</b></td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          <input type="text" name="total">
                        </div>
                      </td>
                      <td>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>



            </div>


            <div class="col-xs-12">
              <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span> Campos obligatorios</small>
              <br>
              <small><span class="fa fa-asterisk" style="font-size:8px;d"></span><span class="fa fa-asterisk" style="font-size:8px;d"></span> Los gastos asociados al centro de gestión "Perfeccionamiento Académico"
                conducente o no conducente de grado de la carrera que corresponda,
                solo pueden incluir gastos relativos a las cuentas que se detallan.</small>
            </div>

          </section>




        </div>
      <!-- </div> -->
      <!-- /.box-body -->
      <!-- box-footer
     <div class="box-footer">
        <ul class="">
          <li class="pull-left "><a href="{{ route('formin.index') }}" class="btn btn-default">Cancelar</a></li>
          <li class="pull-right" ><button type="submit" class="btn btn-primary">Enviar</button></li>
        </ul>
      </div>
    /.box-footer -->
    {!! Form::close() !!}
    </div>

    </div>
    <!-- ./Horizontal Form -->
  </div>

</div>



@endsection('main-content')
