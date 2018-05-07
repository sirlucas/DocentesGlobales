@extends('adminlte::layouts.app')

@section('htmlheader_title', 'New Form')


@section('contentheader_title', 'FORMULARIO DE VISITA INTERNACIONAL - INTERNO')
@section('contentheader_description','International Visit Request Form - Internal')

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
                  <input id="rut" type="text" class="form-control" name="rut"  required placeholder="11222333-1">
              </div>



              <div class="form-group">
                <label for="nombre" class="control-label">
                  Nombre del Académico UDD
                  <br>
                  (Name of Academic UDD)
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
                    Número telefónico
                  <br>
                  (Phone number)
                </label>
                <input name=telefono class="form-control phone" type="text">
              </div>

              <div class="form-group">
                <label for="unidad" class="control-label">
                    Facultad u otra Unidad UDD
                  <br>
                  (Faculty or other UDD)
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
                  Cargo
                  <br>
                  (Position)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargo'])!!}
              </div>

              <div class="form-group">
                <label for="carreras" class="control-label">
                  Carrera a la que pertenece
                  <br>
                  (Study Plan)
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
                <input id="inst_anf" type="text" class="form-control" name="inst_anf"  required placeholder="University of Arizona">
              </div>

              <div class="form-group">
                <label for="website" class="control-label">
                  Página web
                  <br>
                  (Website)
                </label>
                <input id='website' type="text" class="form-control" name="website" placeholder="www.example.cl">
              </div>

              <div class="form-group col-sm-6">
                <label for="pais" class="control-label">
                  País
                  <br>
                  (Country)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  {!!Form::select('pais', $countries->pluck('pais','id'), null,['placeholder'=>'Selecciona un País','class' => 'form-control  select2' ,'required', 'id'=>'countries'])!!}
              </div>

              <div class="form-group col-sm-6">
                <label for="cities" class="control-label">
                  Ciudad o Estado
                  <br>
                  (City or State)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                  <select  id="cities" class="form-control select2" name="cities"></select>
              </div>

              <div class="form-group">
                <label for="inst_descripcion" class="control-label">
                  Proporcione una breve descripcion de la institución que visita
                  <br>
                  (Please provide a brief description of the host institution)
                </label>
                <textarea id="comentarios" class="form-control" rows="2" name="inst_descripcion"></textarea>
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
                  <input class="form-control" id="ida_retorno" type="text" name="ida_retorno" required>
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
              <input name="actividad_nombre" class="form-control"  type="text">
            </div>

              <div class="form-group">
                <label for="actividad" class="control-label">
                  Tipo de actividad a realizar en us visita
                  <br>
                  (Type of activity to perform during your visit)

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
                  Seleccione un aréa de clasificación de su visita
                  <br>
                  (Select a rating area of your visita)
                  <span class="fa fa-asterisk" style="font-size:8px;color:red"></span>
                </label>
                {!!Form::select('clasis', $clasis->pluck('clasificacion','id'), null,['placeholder'=>'Selecione una opción','class' => 'form-control select2' ,'required', 'id'=>'clasificacion'])!!}
              </div>

              <div class="form-group">
                <label for="proposito" class="control-label">
                  ¿Cuál es el proposito principal de su visita, cuáles son los resultados esperados?
                  <br>
                  (What is the main purpose of your visit and what are the desired outcomes?)
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
                          <input type="text" name="matricula" id="matricula"  onchange="sumar();">
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
                          <input type="text" name="arancel" id="arancel" onchange="sumar();" >
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
                          <input type="text" name="pasajes" id="pasajes" onchange="sumar();">
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
                          <input type="text" name="viaticos" id="viaticos" onchange="sumar();">
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
                          <input type="text" name="otros" id="otros" onchange="sumar();">
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
                          <input type="text" id="stotal" name="total">
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
    {!! Form::close() !!}
    </div>

    </div>
    <!-- ./Horizontal Form -->
  </div>

</div>



@endsection('main-content')
