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
      <!-- Box historial der.-->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">Últimos Formulaios - Latest forms</h4>
            <div class="box-tools pull-right">
							<a class="btn bg-olive" href='{{ route("formin.create") }}'>
								<i class="fa fa-plus"></i> Nuevo Formulario
							</a>
            </div>
          </div>
          <div class="box-body table-responsive no-padding">
            <table id="last" class="table  table-hover">
              <thead>
                <tr>
                  <th>Fecha Ingreso</th>
                  <th>Destino</th>
                  <th>Fecha Viaje</th>
                  <th>Académico/Colaborador</th>
									<th>Registrado por</th>
									<th>Opciones</th>
                </tr>
              </thead>
							<tbody>
								@foreach ($forms as $form)
								<tr>
									<td>{{ $form->created_at }}</td>
									<td>{{ $form->institucion_anf }}</td>
									<td>{{ $form->fecha_ida }}</td>
									<td>{{ $form->nombre }}</td>
									<td>
									</td>
									<td>
										<a id="imp" class="btn bg-orange btn-xs"	data-toggle="modal" data-target="#popup"><i class="glyphicon glyphicon-print"></i></a>

									<!--	<a id="imp" class="btn bg-orange btn-xs" data-toggle="tooltip" data-placement="left" title="Imprimir Formularios"><i class="glyphicon glyphicon-print"></i></a>-->
										<a class="btn btn-primary btn-xs" href="{{ route('formin.edit',$form->id) }}" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-edit"></i></a>
										<a class="btn btn-success btn-xs" href="{{ route('formin.edit',$form->id) }}" data-toggle="tooltip" data-placement="top" title="Reciclar datos"><i class="fa fa-recycle"></i></a>
									</td>
								</tr>
							@endforeach
							</tbody>
            </table>
          </div>
          <!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="#" class="uppercase">View All Forms - Ver Todos los Formularios</a>
					</div>
        </div>
      <!-- /.box historial der. -->

    </div>
  </div>
</div>


<div id="popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tipos de Formularios</h4>
      </div>
      <div class="modal-body">
				<a class="btn btn-app">
			   <i class="fa fa-file-pdf-o"></i>DDCA
			  </a>
				<a class="btn btn-app">
			    <i class="fa fa-file-pdf-o"></i>Dirección de Recursos Humanos.
			  </a>
				<a class="btn btn-app">
			    <i class="fa fa-file-pdf-o"></i>Formulario Pago Viaticos (FPV)
			  </a>
				<a class="btn btn-app">
			    <i class="fa fa-file-pdf-o"></i>Formmulario --
			  </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

@endsection
