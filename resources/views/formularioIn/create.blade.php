@extends('adminlte::layouts.app')

@section('htmlheader_title', 'New Form')


@section('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL')
@section('contentheader_description','Formulario de Visita internacional - Interno')

@section('main-content')
<div class="row">
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box">
      <div class="box-header header-form with-border">
        <p>This form must be completed by any teacher and/or
          administrative UDD who visits a foreign institution and
          whose purpose is an <b>academic activity.</b></p>
        <p>Este formulario debe ser completado por cualquier docente y/o
          administrativo UDD que viiste una institución extranjera y cuyo
        proposito sea una <b>actividad Académica.</b></p>
    <!--    <div class="steps-pull-right">
          <ul class="wizard-steps nav-wizard">
            <li class="step active"><a href="#form2_tab1" data-toggle="tab" class="btn btn-ripple btn-primary" aria-expanded="true">1</a>Professor details<br>(Información del profesor)</li>
            <li class="step"><a href="#form2_tab2" data-toggle="tab" class="btn btn-ripple" aria-expanded="false">2</a>Hosting institution detail<br>(Detalles de la Institución)</li>
            <li class="step"><a href="#form2_tab3" data-toggle="tab" class="btn btn-white btn-ripple">3</a>Existing Relationships<br>(Relaciones Existentes)</li>
          </ul>
        </div> -->
      </div>

      <!-- box-body -->
      <div class="box-body">

        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        {!! Form::open(['id' => 'form1','route' => 'formin.store', 'method' => 'post']) !!}
        {{ csrf_field() }}
        <div class="tab-content">


          <div id="formin_tab1" class="tab-pane active col-xs-12">
            <!-- panel izquierdo -->
            <div class="col-sm-6">

              <div class="form-group">

                <div class="form-group">
                  <label for="rut" class="control-label">
                    <br>
                    RUT<span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                  </label>
                  <input type="text" class="form-control" name="rut"  required placeholder="11222333-1">
                </div>

                <label for="nombre" class="control-label">
                  Name of Academic UDD
                  <br>
                  (Nombre del Académico UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="Jhon J. Doe">
              </div>


              <div class="form-group">
                <label for="email" class="control-label">
                  <br>
                  Email<span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <input id='email' type="email" class="form-control" name="email"  required placeholder="email@example.com">
              </div>

                <div class="form-group">
                  <label for="nombre" class="control-label">
                    Phone number
                    <br>
                    (Número telefónico)
                    <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                  </label>
                  <input class="form-control" data-inputmask="'mask': ['+99-999999999']" data-mask="" type="text">
                </div>


            </div>
            <!-- ./panel izquierdo -->

            <!-- panel derecho -->
            <div class="col-sm-6">

              <div class="form-group">
                <label for="unidad" class="control-label">
                  Faculty or other UDD
                  <br>
                  (Facultad u otra Unidad UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('unidad', $unidades->pluck('unidad','id'), null,['placeholder'=>'Seleccione una unidad','class' => 'form-control select2' ,'required', 'id'=>'unidades'])!!}
              </div>

              <div class="form-group">
                <label for="sede" class="control-label">
                  Sede
                  <br>
                  (Sede)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('sede', $sedes->pluck('sede','id'), null,['placeholder'=>'Selecione una Sede','class' => 'form-control select2' ,'required', 'id'=>'sede'])!!}
              </div>

              <div class="form-group">
                <label for="cargos" class="control-label">
                  Position
                  <br>
                  (Cargo)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargos'])!!}
              </div>

            </div>
            <!-- ./panel derecho -->
            <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span>Campos obligatorios</small>
          </div>

          <div id="formin_tab2" class="tap-pane">
            <!-- panel izquierdo -->
            <div class="col-sm-6">
              <div class="form-group">
                <label for="inst_anf" class="control-label">
                  Name of host Institution
                  <br>
                  (Nombre de la Institución anfitriona)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <input id="inst_anf" type="text" class="form-control" name="inst_anf"  required placeholder="Jhon J. Doe">
              </div>

              <div class="form-group">
                <label for="nombre" class="control-label">
                  Country
                  <br>
                  (País)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!!Form::select('pais', $countries->pluck('pais','id'), null,['placeholder'=>'Selecciona un País','class' => 'form-control select2' ,'required', 'id'=>'countries'])!!}
              </div>

              <div class="form-group">
                <label for="cities" class="control-label">
                  City or State
                  <br>
                  (Ciudad o Estado)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <select  id="cities" class="form-control select2" name="cities"></select>
              </div>

              <div class="form-group">
                <label for="fono_anf" class="control-label">
                  Please provide a brief description of the host institution<br>
                  (Proporcione una breve descripcion de la institución que visita)
                </label>
                <textarea class="form-control" rows="2" name="comentarios"></textarea>
              </div>


            </div>
            <!-- panel izquierdo -->

            <!-- panel derecho -->
            <div class="col-sm-6">

              <div class="form-group col-sm-6">
    						<label class="control-label">Date of visit <br>(Fecha de visita)</label>
    						<div class="input-group date infecha">
    							<div class="input-group-addon">
    								<i class="fa fa-calendar"></i>
    							</div>
    							<input type="text" class="form-control pull-right datepicker" id="datepicker_ida" required name="fechaida">
    						</div>
    					</div>

              <div class="form-group col-sm-6">
    						<label class="control-label">Date of return<br>(Fecha de Retorno)</label>
    						<div class="input-group date infecha">
    							<div class="input-group-addon">
    								<i class="fa fa-calendar"></i>
    							</div>
    							<input type="text" class="form-control pull-right datepicker" id="datepicker_retorno" required name="fecharetorno">
    						</div>
    					</div>

              <div class="form-group">
                <label for="actividad" class="control-label">
                  Type of activity to perform during your visit
                  <br>
                  (Tipo de actividad a realizar en us visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('actividad', $actividades->pluck('actividad','id'), null,['placeholder'=>'Seleccione una actividad','class' => 'form-control select2' ,'required', 'id'=>'actividades'])!!}
              </div>

              <div class="form-group">
                <label for="rut" class="control-label">
                  Select a rating area of your visita
                  <br>
                  (Seleccione un aréa de clasificación de su visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('clasis', $clasis->pluck('clasificacion','id'), null,['placeholder'=>'Selecione una opción','class' => 'form-control select2' ,'required', 'id'=>'clasificacion'])!!}
              </div>

              <div class="form-group">
                <label for="proposito" class="control-label">
                  What is the main purpose of your visit and what are the desired outcomes?
                  <br>
                  (¿Cuál es el proposito principal de su visita, cuáles son los resultados esperados?)
                </label>
                <textarea class="form-control" rows="2" name="proposito"></textarea>
              </div>
            </div>
            <!-- ./panel derecho -->
              <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span>Campos obligatorios</small>
          </div>
          <!-- ./tab panel 2 -->

          <!-- tab panel 3 -->
          <div id="formin_tab3" class="tap-pane">
            <!-- panel izquierdo -->
            <div class="col-sm-6">

              <div class="form-group">
                <label for="contacto_anf" class="control-label">
                  Name
                  <br>
                  (Nombre)
                </label>
                <input  name="contacto_anf" class="form-control" placeholder="Jhon J. Doe" type="text">
              </div>

              <div class="form-group">
                <label for="cargo_anf" class="control-label">
                  Position
                  <br>
                  (Cargo)
                </label>
                <input name="cargo_anf"class="form-control"  type="text">
              </div>

              <div class="form-group">
                <label for="email_anf" class="control-label">
                  Email
                </label>
                <input id='email_anf' type="email" class="form-control" name="email_anf" placeholder="email@example.com">
              </div>

              <div class="form-group">
                <label for="fono_anf" class="control-label">
                  Phone number<br>
                  (Número telefónico)
                </label>
                <input id='fono_anf' type="text" class="form-control" name="fono_anf">
              </div>

            </div>
            <!-- ./panel izqueirdo -->

            <!-- panel derecho -->
            <div class="col-sm-6">

              <div class="form-group">
                <label for="nombre" class="control-label">
                  Please name of the faculty members you will meet at the host institution during your visit.
                  <br>
                  (Por favor, indique a las personas de la institución anfitriona con las que se reunirá durante su visita).
                </label>
                <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="En proceso">
              </div>

              <div class="form-group">
                <label for="nombre" class="control-label">
                  Cargo
                  <br>
                  (Por favor, indique a las personas de la institución anfitriona con las que se reunirá durante su visita).
                </label>
                <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="En proceso">
              </div>

            </div>
            <!-- ./panel derecho -->
            <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span> Campos obligatorios</small>
          </div>
          <!-- tab panel 3 -->
          <div id="formin_tab4" class="tap-pane">


            <div class="form-group">
              <label for="proposito" class="control-label">
                Does the host institution have any existing agreements or other kinds of collaboration with UDD, please specify.
                <br>
                (¿Tiene la institutión anfitriona acuerdos o algún otro tipo de colaboración conal UDD?, por favor especifique).
              </label>
              <textarea class="form-control" rows="3" name="proposito"></textarea>
            </div>




            <small><span class="fa fa-asterisk" style="font-size:8px;color:red"></span> Campos obligatorios</small>

          </div>


        </div>
      </div>
      <!-- /.box-body -->
      <!-- box-footer -->
      <div class="box-footer">
        <ul class="wizard clearfix">
          <li class="bs-wizard-prev pull-left disabled"><a href="{{ route('formin.index') }}" class="btn btn-default">Cancelar</a></li>
          <li class="bs-wizard-prev pull-left disabled" style="display: none;"><button class="btn btn-flat btn-default btn-ripple">Atrás</button></li>
          <li class="bs-wizard-next pull-right"><button class="btn btn-primary btn-ripple">Siguiente</button></li>
          <li class="bs-wizard-submit pull-right" style="display: none;"><button type="submit" class="btn btn-primary btn-ripple">Enviar</button></li>
        </ul>
      </div>
      <!-- /.box-footer -->
      {!! Form::close() !!}
    </div>

    </div>
    <!-- ./Horizontal Form -->
  </div>

</div>



@endsection('main-content')
