@extends('adminlte::layouts.app')

@section('htmlheader_title', 'Edit Form')


@section('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL (Edit View)')
@section('contentheader_description','Formulario de Visita internacional - Interno (Vista de Edición)')

@section('main-content')
<div class="row">
  <div class="col-md-12">
    <!-- 5orizontal Form -->
    <div class="box">
    {{ Form::model($form, array('route' => array('formin.update', $form->id), 'method' => 'PUT', 'id' => 'form1')) }}
      <div class="box-header header-form">
        <p>This form must be completed by any teacher and/or
          administrative UDD who visits a foreign institution and
          whose purpose is an <b>academic activity.</b></p>
        <p>Este formulario debe ser completado por cualquier docente y/o
          administrativo UDD que viiste una institución extranjera y cuyo
        proposito sea una <b>actividad Académica.</b></p>

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

          <h5> Professor details<br>(Información del profesor)</h5>
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
                  Name of Academic UDD
                  <br>
                  (Nombre del Académico UDD)
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
                  Phone number
                  <br>
                  (Número telefónico)
                </label>
                {!! Form::text('telefono',$form->telefono,['class' => 'form-control phone', 'placeholder'=>'987654321', 'id'=>'telefono']) !!}
              </div>

              <div class="form-group">
                <label for="unidad" class="control-label">
                  Faculty or other UDD
                  <br>
                  (Facultad u otra Unidad UDD)
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
                  Position
                  <br>
                  (Cargo)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('cargo', $cargos->pluck('cargo','id'), $form->cargo->id,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargo'])!!}
              </div>

              <div class="form-group">
                <label for="carreras" class="control-label">
                  Study Plan
                  <br>
                  (Carrera a la que pertenece)
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

          <h5>Hosting institution detail <br> (Detalles de la Institución)</h5>
          <section>

            <!-- panel izquierdo -->
            <div class="col-md-6">

              <div class="form-group">
                <label for="inst_anf" class="control-label">
                  Name of host Institution
                  <br>
                  (Nombre de la Institución anfitriona)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!! Form::text('inst_anf',$form->institucion_anf,['class' => 'form-control', 'placeholder'=>'University - Example', 'required', 'id'=>'inst_anf']) !!}
              </div>

              <div class="form-group">
                <label for="website" class="control-label">
                  Website
                  <br>
                  (Pagina web)
                </label>
                {!! Form::text('website',$form->website,['class' => 'form-control', 'placeholder'=>'https://www.example.cl', 'id'=>'website']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="pais" class="control-label">
                  Country
                  <br>
                  (País)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!!Form::select('pais', $countries->pluck('pais','id'), $form->ciudad->pais->id,['placeholder'=>'Selecciona un País','class' => 'form-control  select2' ,'required', 'id'=>'countries'])!!}
              </div>

              <div class="form-group col-sm-6">
                <label for="cities" class="control-label">
                  City or State
                  <br>
                  (Ciudad o Estado)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <select  id="cities" class="form-control select2" name="cities">
                  <option value="{{$form->ciudad->id}}" selected>{{$form->ciudad->ciudad}}</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="inst_descripcion" class="control-label">
                  Please provide a brief description of the host institution<br>
                  (Proporcione una breve descripcion de la institución que visita)
                </label>
                {!! Form::textarea('inst_descripcion',$form->inst_descripcion,['class' => 'form-control', 'id'=>'comentarios', 'rows' => '2']) !!}
              </div>

              <div class="form-group">
                <label class="control-label">
                  Date of visit <br>
                  (Fecha de visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::text('ida_retorno',$ida_retorno,['class' => 'form-control', 'required', 'id'=>'ida_retorno']) !!}
                </div>
                <!-- /.input group -->
              </div>

            </div>
            <!-- panel izquierdo -->

            <!-- panel derecho -->
            <div class="col-md-6">

            <div class="form-group">
              <label for="actividad_nombre" class="control-label">
                Name of Activity
                <br>
                (Nombre de la actividad)
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
                  Select a rating area of your visita
                  <br>
                  (Seleccione un aréa de clasificación de su visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('clasis', $clasis->pluck('clasificacion','id'), $form->clasificacion->id,['placeholder'=>'Selecione una opción','class' => 'form-control select2' ,'required', 'id'=>'clasificacion'])!!}
              </div>

              <div class="form-group">
                <label for="proposito" class="control-label">
                  What is the main purpose of your visit and what are the desired outcomes?
                  <br>
                  (¿Cuál es el proposito principal de su visita, cuáles son los resultados esperados?)
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
          <h5>Existing Relationships<br>(Relaciones Existentes) </h5>
          <section>

            <!-- panel izquierdo -->
            <div class="col-sm-6">
              <b>Contact at foreign institution (Contacto en la insititución) </b>
              <div class="form-group">
                <label for="contacto_anf" class="control-label">
                  Name
                  <br>
                  (Nombre)
                </label>
                {!! Form::text('contacto_anf',$form->contacto_anf,['class' => 'form-control','placeholder' => 'Jhon J. Doe', 'id'=>'contacto_anf']) !!}
              </div>

              <div class="form-group">
                <label for="cargo_anf" class="control-label">
                  Position
                  <br>
                  (Cargo)
                </label>
                {!! Form::text('cargo_anf',$form->cargo_anf,['class' => 'form-control', 'id'=>'cargo_anf']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="email_anf" class="control-label">
                  Email<br>
                  (Correo electrónico)
                </label>
                {!! Form::email('email_anf',$form->email_anf,['class' => 'form-control','placeholder' => 'email@example.com', 'id'=>'email_anf']) !!}
              </div>

              <div class="form-group col-sm-6">
                <label for="fono_anf" class="control-label">
                  Phone number<br>
                  (Número telefónico)
                </label>
                {!! Form::text('fono_anf',$form->fono_anf,['class' => 'form-control', 'id'=>'fono_anf']) !!}
              </div>

            </div>
            <!-- ./panel izqueirdo -->

            <!-- panel derecho -->
            <div class="col-sm-6">



            </div>
            <!-- ./panel derecho -->

          </section>

          <!-- tab panel 4 -->
          <h5>Others<br>(Otros)</h5>
          <section>

            <!--panel izquierdo-->
            <div class="col-sm-4 pull-left">

              <div class="form-group">
                <label for="colaboracion" class="control-label">
                  Does the host institution have any existing agreements or other kinds of collaboration with UDD, please specify.
                  <br>
                  (¿Tiene la institutión anfitriona acuerdos o algún otro tipo de colaboración conal UDD?, por favor especifique).
                </label>
                {!! Form::textarea('colaboracion',$form->colaboracion,['class' => 'form-control','rows' => '3', 'id'=>'colaboracion']) !!}
              </div>

              <div class="form-group">
                <label for="observaciones" class="control-label">
                  Comments
                  <br>
                  (Observaciones)
                </label>
                {!! Form::textarea('observaciones',$form->observaciones,['class' => 'form-control','rows' => '3', 'id'=>'observaciones']) !!}
              </div>

            </div>

            <!--panel derecho-->
            <div class="col-sm-8">

              <div class="form-group">
                <label for="aportes" class="control-label">
                  Contribution detail requested
                  <br>
                  (Detalle del aporte solicitado)
                </label>
                <div class="table-responsive no-padding">
                <table id="aporte" class="table table-bordered">
                  <thead>
                    <tr>
                      <td><span class="fa fa-asterisk" style="font-size:7px;"></span><span class="fa fa-asterisk" style="font-size:7px;"></span>Cuenta</td>
                      <td>
                        {!!Form::select('currency', $divisas->pluck('currency','id'), $divisa,['placeholder'=>'Select Currency','class' => 'form-control select2' ,'required', 'id'=>'currency'])!!}
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
                        @if($matricula != null)
                        {!! Form::text('matricula',$matricula->pivot->monto,['class' => 'form-control', 'id'=>'matricula']) !!}
                        @else
                        {!! Form::text('matricula',null,['class' => 'form-control', 'id'=>'matricula']) !!}
                        @endif
                        </div>
                      </td>
                      <td>
                        @if($matricula != null)
                        {!!Form::select('cgestionm', $cgestion->pluck('cgestion','id'), $matricula->pivot->c_gestion_id,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @else
                        {!!Form::select('cgestionm', $cgestion->pluck('cgestion','id'), null,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Arancel</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          @if($arancel != null)
                          {!! Form::text('arancel',$arancel->pivot->monto,['class' => 'form-control', 'id'=>'arancel']) !!}
                          @else
                          {!! Form::text('arancel',null,['class' => 'form-control', 'id'=>'arancel']) !!}
                          @endif
                        </div>
                      </td>
                      <td>
                        @if($arancel != null)
                        {!!Form::select('cgestiona', $cgestion->pluck('cgestion','id'), $arancel->pivot->c_gestion_id,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @else
                        {!!Form::select('cgestiona', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Pasajes</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          @if($pasajes != null)
                          {!! Form::text('pasajes',$pasajes->pivot->monto,['class' => 'form-control', 'id'=>'pasajes']) !!}
                          @else
                          {!! Form::text('pasajes',null,['class' => 'form-control', 'id'=>'pasajes']) !!}
                          @endif
                        </div>
                      </td>
                      <td>
                        @if($pasajes != null)
                        {!!Form::select('cgestionp', $cgestion->pluck('cgestion','id'), $pasajes->pivot->c_gestion_id,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @else
                        {!!Form::select('cgestionp', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Viático</td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          @if($viaticos != null)
                          {!! Form::text('viaticos',$viaticos->pivot->monto,['class' => 'form-control', 'id'=>'viaticos']) !!}
                          @else
                          {!! Form::text('viaticos',null,['class' => 'form-control', 'id'=>'viaticos']) !!}
                          @endif
                        </div>
                      </td>
                      <td>
                        @if( $viaticos != null )
                        {!!Form::select('cgestionv', $cgestion->pluck('cgestion','id'), $viaticos->pivot->c_gestion_id,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @else
                        {!!Form::select('cgestionv', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Otros</td>
                      <td>
                        <div class="input-group">
            							<div class="divisa input-group-addon">
            								<i class="fa fa-dollar"></i>
            							</div>
                          @if($otros != null)
                          {!! Form::text('otros',$otros->pivot->monto,['class' => 'form-control', 'id'=>'otros']) !!}
                          @else
                          {!! Form::text('otros',null,['class' => 'form-control', 'id'=>'otros']) !!}
                          @endif
                        </div>
                      </td>
                      <td>
                        @if( $otros != null)
                        {!!Form::select('cgestiono', $cgestion->pluck('cgestion','id'), $otros->pivot->c_gestion_id,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @else
                        {!!Form::select('cgestiono', $cgestion->pluck('cgestion','id'), 1,['placeholder'=>'Seleccione C. Gestión','class' => 'form-control select2'])!!}
                        @endif
                      </td>
                    </tr>
                    <tr class="info">
                      <td><b>Total:</b></td>
                      <td>
                        <div class="input-group">
                          <div class="divisa input-group-addon">
                            <i class="fa fa-dollar"></i>
                          </div>
                          @if($total != null)
                          {!! Form::text('total',$total->pivot->monto,['class' => 'form-control', 'id'=>'total']) !!}
                          @else
                          {!! Form::text('total',null,['class' => 'form-control', 'id'=>'total']) !!}
                          @endif
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
    {!! Form::close() !!}
    </div>

    </div>
    <!-- ./Horizontal Form -->
  </div>

</div>



@endsection('main-content')
