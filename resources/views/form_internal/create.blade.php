@extends('adminlte::layouts.app')

@section('htmlheader_title', 'New Form')


@section('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL')
@section('contentheader_description','Formulario de Visita internacional - Interno')

@section('main-content')
<div class="row">
  <div class="col-md-12">
    <!-- 5orizontal Form -->
    <div class="box">
    {!! Form::open(['id' => 'form1','route' => 'formin.store', 'method' => 'post']) !!}
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
                  <input id="rut" type="text" class="form-control" name="rut"  required placeholder="11222333-1">
              </div>



              <div class="form-group">
                <label for="nombre" class="control-label">
                  Name of Academic UDD
                  <br>
                  (Nombre del Académico UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="Jhon J. Doe">
              </div>

              <div class="form-group col-sm-6">
                <label for="email" class="control-label">
                  <br>
                  Email
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                <input id='email' type="email" class="form-control" name="email"  required placeholder="email@example.com">
              </div>

              <div class="form-group col-sm-6">
                <label for="telefono" class="control-label">
                  Phone number
                  <br>
                  (Número telefónico)
                </label>
                <input name=telefono class="form-control phone" type="text">
              </div>

              <div class="form-group">
                <label for="unidad" class="control-label">
                  Faculty or other UDD
                  <br>
                  (Facultad u otra Unidad UDD)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('unidad', $unidades->pluck('unidad','id'), null,['placeholder'=>'Seleccione una unidad','class' => 'form-control select2' ,'required', 'id'=>'unidades'])!!}
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
                {!!Form::select('sede', $sedes->pluck('sede','id'), null,['placeholder'=>'Selecione una Sede','class' => 'form-control select2' ,'required', 'id'=>'sede'])!!}
              </div>

              <div class="form-group">
                <label for="cargo" class="control-label">
                  Position
                  <br>
                  (Cargo)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargo'])!!}
              </div>

              <div class="form-group">
                <label for="carreras" class="control-label">
                  Study Plan
                  <br>
                  (Carrera a la que pertenece)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('carreras', $carreras->pluck('carrera','id'), null,['placeholder'=>'Seleccione una carrera','class' => 'form-control select2' ,'required', 'id'=>'carreras'])!!}
              </div>

              <div id='postitulo' class="form-group hidden">
                <label for="postitulo" class="control-label">
                  <br>
                  ¿Nombre del Programa de Estudio?
                </label>
                <input id="postin" class="form-control" required name="postitulo">
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
                <input id="inst_anf" type="text" class="form-control" name="inst_anf"  required placeholder="University of Arizona">
              </div>

              <div class="form-group">
                <label for="website" class="control-label">
                  Website
                  <br>
                  (Pagina web)
                </label>
                <input id='website' type="text" class="form-control" name="website" placeholder="www.example.cl">
              </div>

              <div class="form-group col-sm-6">
                <label for="pais" class="control-label">
                  Country
                  <br>
                  (País)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!!Form::select('pais', $countries->pluck('pais','id'), null,['placeholder'=>'Selecciona un País','class' => 'form-control  select2' ,'required', 'id'=>'countries'])!!}
              </div>

              <div class="form-group col-sm-6">
                <label for="cities" class="control-label">
                  City or State
                  <br>
                  (Ciudad o Estado)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <select  id="cities" class="form-control select2" name="cities"></select>
              </div>

              <div class="form-group">
                <label for="inst_descripcion" class="control-label">
                  Please provide a brief description of the host institution<br>
                  (Proporcione una breve descripcion de la institución que visita)
                </label>
                <textarea id="comentarios" class="form-control" rows="2" name="inst_descripcion"></textarea>
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
                  <input class="form-control" id="ida_retorno" type="text" name="ida_retorno" required>
                </div>
                <!-- /.input group -->
              </div>

            </div>
            <!-- panel izquierdo -->

            <!-- panel derecho -->
            <div class="col-md-6">

              <!--
              <div class="form-group col-sm-6">
    						<label class="control-label">Date of visit <br>(Fecha de visita)
                <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
              </label>
    						<div class="input-group date infecha">
    							<div class="input-group-addon">
    								<i class="fa fa-calendar"></i>
    							</div>
    							<input id="datepicker_ida" type="text" class="form-control datepicker pull-right" required name="fechaida">
    						</div>
    					</div>

              <div class="form-group col-sm-6">
    						<label class="control-label">Date of return<br>(Fecha de Retorno)
                <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
              </label>

    						<div class="input-group date infecha">
    							<div class="input-group-addon">
    								<i class="fa fa-calendar"></i>
    							</div>
    							<input id="datepicker_retorno" type="text" class="form-control  datepicker pull-right" required name="fecharetorno">
    						</div>
    					</div>
            -->
            <div class="form-group">
              <label for="actividad_nombre" class="control-label">
                Name of Activity
                <br>
                (Nombre de la actividad)
              </label>
              <input name="actividad_nombre" class="form-control"  type="text">
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
                <label for="plantrabajo">
                ¿Actividad incluida en su plan de trabajo?
                <br>
                Activity included in your work plan?
                </label>
                <select name="plantrabajo"  required class="form-control select2">
                  <option value="" disabled selected>Selecciona una opción...</option>
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
                {!!Form::select('clasis', $clasis->pluck('clasificacion','id'), null,['placeholder'=>'Selecione una opción','class' => 'form-control select2' ,'required', 'id'=>'clasificacion'])!!}
              </div>

              <div class="form-group">
                <label for="proposito" class="control-label">
                  What is the main purpose of your visit and what are the desired outcomes?
                  <br>
                  (¿Cuál es el proposito principal de su visita, cuáles son los resultados esperados?)
                </label>
                <textarea id="proposito" class="form-control" rows="2" name="proposito"></textarea>
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

              <div class="form-group col-sm-6">
                <label for="email_anf" class="control-label">
                  Email<br>
                  (Correo electrónico)
                </label>
                <input id='email_anf' type="email" class="form-control" name="email_anf" placeholder="email@example.com">
              </div>

              <div class="form-group col-sm-6">
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
                <textarea class="form-control" rows="3" name="colaboracion"></textarea>
              </div>

              <div class="form-group">
                <label for="observaciones" class="control-label">
                  Comments
                  <br>
                  (Observaciones)
                </label>
                <textarea class="form-control" rows="3" name="observaciones"></textarea>
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
                        {!!Form::select('currency', $divisas->pluck('currency','idcurrency'), 1,['placeholder'=>'Select Currency','class' => 'form-control select2' ,'required', 'id'=>'currency'])!!}
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
