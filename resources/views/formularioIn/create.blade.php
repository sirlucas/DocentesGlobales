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
        {!! Form::open(['url' => 'foo/bar', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="col-xs-12 col-sm-4">

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
            <input type="text" class="form-control" name="paciente"  required placeholder="Jhon J. Doe">
          </div>

          <div class="form-group">
            <label for="nombre" class="control-label">
              Email
              <span class="fa fa-asterisk"></span>
            </label>
            <input type="select" class="form-control" name="paciente"  required placeholder="Jhon J. Doe">
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
            <input type="select" class="form-control" name="paciente"  required placeholder="Jhon J. Doe">
          </div>

          <div class="form-group">
            <label for="nombre" class="control-label">
              Faculty or other UDD
              <br>
              (Facultad u otra Unidad UDD)
              <span class="fa fa-asterisk"></span>
            </label>
            <input type="select" class="form-control" name="paciente"  required placeholder="Jhon J. Doe">
          </div>


        </div>
      </div>
      <!-- /.box-body -->
      <!-- box-footer -->
      <div class="box-footer">
        <a href="{{ url('formin') }}" class="btn btn-default">Cancelar</a>
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
