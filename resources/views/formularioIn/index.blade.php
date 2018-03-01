@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.interno') }}
@endsection

@section('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL')

@section('contentheader_description','Formulario de Visita internacional - Interno')

@section('main-content')

@if ($message = Session::get('success'))

		<div class="alert alert-success">

				<p>{{ $message }}</p>

		</div>

@endif
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <!-- Box opciones menú izq -->
      <div class="col-sm-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">Opciones - Options</h4>
            <div class="box-tools pull-right">
              <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button> -->
            </div>
          </div>
          <div class="box-body">
						<a href="{{ route('formin.create') }}" class="btn btn-app">
							<i class="fa fa-plus"></i>
							{{ trans('adminlte_lang::message.newform') }}
						</a>
						<a href="#" class="btn btn-app">
							<i class="fa fa-edit"></i>
							{{ trans('adminlte_lang::message.editform') }}
						</a>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.box opciones menú -->

      <!-- Box historial der.-->
      <div class="col-sm-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">Últimos Formulaios - Latest forms</h4>
            <div class="box-tools pull-right">
              <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button> -->
            </div>
          </div>
          <div class="box-body">
            <table id="last" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Destino</th>
                  <th>Fecha ingreso</th>
                  <th>Acciones</th>
                </tr>
              </thead>
							<tbody>
								@foreach ($forms as $form)
								<tr>
									<td>{{ ++$i }}</td>
									<td>{{ $form->institucion_anf }}</td>
									<td>{{ $form->fecha_ida }}</td>
									<td>
										<a class="btn btn-info" href="{{ route('formin.show',$form->id) }}">Show</a>
										<a class="btn btn-primary" href="{{ route('formin.edit',$form->id) }}">Edit</a>
									</td>
								</tr>
							@endforeach
							</tbody>
            </table>
          </div>
          <!-- /.box-body -->
				<!--	<div class="box-footer text-center">
						<a href="#" class="uppercase">View All Forms - Ver Todos los Formularios</a>
					</div>
        </div> -->
      </div>
      <!-- /.box historial der. -->

    </div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

});

</script>
@endsection
