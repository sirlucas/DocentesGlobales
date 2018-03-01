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
        <div class="col-xs-12 col-sm-4 tab-content">
          <div id="formin_tab1" class="tab-pane active">

            <div class="form-group">
              <label for="nombre" class="control-label">
                Name of Academic UDD
                <br>
                (Nombre del Académico UDD)
                <span class="fa fa-asterisk"></span>
              </label>
              <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="Jhon J. Doe">
            </div>

            <div class="form-group">
              <label for="rut" class="control-label">
                RUT
                <span class="fa fa-asterisk"></span>
              </label>
              <input type="text" class="form-control" name="rut"  required placeholder="11222333-1">
            </div>

            <div class="form-group">
              <label for="email" class="control-label">
                Email
                <span class="fa fa-asterisk"></span>
              </label>
              <input id='email' type="email" class="form-control" name="email"  required placeholder="email@example.com">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Phone number
                <br>
                (Número telefónico)
                <span class="fa fa-asterisk"></span>
              </label>
              <input class="form-control" data-inputmask="'mask': ['+99-999999999']" data-mask="" type="text">
            </div>

            <div class="form-group">
              <label for="cargos" class="control-label">
                Position
                <br>
                (Cargo)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargos'])!!}
            </div>

            <div class="form-group">
              <label for="unidad" class="control-label">
                Faculty or other UDD
                <br>
                (Facultad u otra Unidad UDD)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('unidad', $unidades->pluck('unidad','id'), null,['placeholder'=>'Seleccione una unidad','class' => 'form-control select2' ,'required', 'id'=>'unidades'])!!}
            </div>
            <small><span class="fa fa-asterisk"></span> Campos obligatorios</small>

          </div>

          <div id="formin_tab2" class="tap-pane">

            <div class="form-group">
              <label for="inst_anf" class="control-label">
                Name of host Institution
                <br>
                (Nombre de la Institución anfitriona)
                <span class="fa fa-asterisk"></span>
              </label>
              <input id="inst_anf" type="text" class="form-control" name="inst_anf"  required placeholder="Jhon J. Doe">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Country
                <br>
                (País)
                <span class="fa fa-asterisk"></span>
              </label>
                {!!Form::select('pais', $countries->pluck('pais','id'), null,['placeholder'=>'Selecciona un País','class' => 'form-control select2' ,'required', 'id'=>'countries'])!!}
            </div>

            <div class="form-group">
              <label for="rut" class="control-label">
                City or State
                <br>
                (Ciudad o Estado)
                <span class="fa fa-asterisk"></span>
              </label>
                <select  id="cities" class="form-control select2" name="cities"></select>
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Phone number
                <br>
                (Número telefónico)
                <span class="fa fa-asterisk"></span>
              </label>
              <input class="form-control" data-inputmask="'mask': ['+99-999999999']" data-mask="" type="text">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Position
                <br>
                (Cargo)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control select2' ,'required', 'id'=>'cargos'])!!}
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Faculty or other UDD
                <br>
                (Facultad u otra Unidad UDD)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('unidad', $unidades->pluck('unidad','id'), null,['placeholder'=>'Seleccione una unidad','class' => 'form-control' ,'required', 'id'=>'unidades'])!!}
            </div>
            <small><span class="fa fa-asterisk"></span> Campos obligatorios</small>

          </div>

          <div id="formin_tab3" class="tab-pane">

            <div class="form-group">
              <label for="nombre" class="control-label">
                Name of Academic UDD
                <br>
                (Nombre del Académico UDD)
                <span class="fa fa-asterisk"></span>
              </label>
              <input id="nombre" type="text" class="form-control" name="nombre"  required placeholder="Jhon J. Doe">
            </div>

            <div class="form-group">
              <label for="rut" class="control-label">
                RUT
                <span class="fa fa-asterisk"></span>
              </label>
              <input type="text" class="form-control" name="rut"  required placeholder="11222333-1">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Email
                <span class="fa fa-asterisk"></span>
              </label>
              <input type="email" class="form-control" name="email"  required placeholder="email@example.com">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Phone number
                <br>
                (Número telefónico)
                <span class="fa fa-asterisk"></span>
              </label>
              <input class="form-control" data-inputmask="'mask': ['+99-999999999']" data-mask="" type="text">
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Position
                <br>
                (Cargo)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('cargo', $cargos->pluck('cargo','id'), null,['placeholder'=>'Selecione un cargo','class' => 'form-control' ,'required', 'id'=>'cargos'])!!}
            </div>

            <div class="form-group">
              <label for="nombre" class="control-label">
                Faculty or other UDD
                <br>
                (Facultad u otra Unidad UDD)
                <span class="fa fa-asterisk"></span>
              </label>
              {!!Form::select('unidad', $unidades->pluck('unidad','id'), null,['placeholder'=>'Seleccione una unidad','class' => 'form-control' ,'required', 'id'=>'unidades'])!!}
            </div>
            <small><span class="fa fa-asterisk"></span> Campos obligatorios</small>

          </div>

        </div>
      </div>
      <!-- /.box-body -->
      <!-- box-footer -->
      <div class="box-footer">
        <a href="{{ route('formin.index') }}" class="btn btn-default">Cancelar</a>
        <ul class="wizard clearfix">
          <li class="bs-wizard-prev pull-left disabled" style="display: none;"><button class="btn btn-flat btn-default btn-ripple">Previous</button></li>
          <li class="bs-wizard-next pull-right"><button class="btn btn-primary btn-ripple">Next</button></li>
          <li class="bs-wizard-submit pull-right" style="display: none;"><button type="submit" class="btn btn-blue btn-ripple">Complete setup</button></li>
        </ul>
        <button type="submit" class="btn btn-primary pull-right">Guardar</button>
      </div>
      <!-- /.box-footer -->
      {!! Form::close() !!}
    </div>

    </div>
    <!-- ./Horizontal Form -->
  </div>

</div>



@endsection('main-content')
