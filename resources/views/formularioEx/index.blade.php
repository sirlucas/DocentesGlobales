@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.externo') }}
@endsection

@section('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - EXTERNAL')

@section('contentheader_description','Formulario de Visita internacional - Externo')

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
        <div class="box box-orange">
					<div class="box-body">
						<div class="error-content">
		            <h3><i class="fa fa-warning text-yellow"></i> Oops! {{ trans('adminlte_lang::message.mantenimiento') }}.</h3>
		            <p>
		                {{ trans('adminlte_lang::message.notfindpage') }}
		                {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adminlte_lang::message.gohome') }}.</a>
		            </p>
		        </div><!-- /.error-content -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection('main-content')
