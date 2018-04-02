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
            <div class="box-tools ">
							<a class="btn bg-olive" href='{{ route("formin.create") }}'>
								<i class="fa fa-plus"></i> Nuevo Formulario
							</a>
            </div>
          </div>
          <div class="box-body table-responsive ">
            <table id="last" class="table table-hover">
              <thead>
                <tr>
                  <th>Fecha Registro</th>
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
									<td>{{ $form->created_at}}</td>
									<td>{{ $form->institucion_anf }}</td>
									<td>{{ $form->fecha_ida }} <br> {{ $form->fecha_retorno }}</td>
									<td>{{ $form->nombre }}</td>
									<td>
										adsfasfas
									</td>
									<td>
										<a id="imp" class="btn bg-orange btn-xs" role="button" onclick="return openModal({{$form->id}})"	data-toggle="tooltip" data-placement="left" title="Imprimir Formularios"><i class="glyphicon glyphicon-print"></i></a>
										<a class="btn btn-primary btn-xs" href="" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-edit"></i></a>
										<a class="btn btn-success btn-xs" href="{{ route('formin/drrhh', $form->id) }}" data-toggle="tooltip" data-placement="top" title="Reciclar datos"><i class="fa fa-recycle"></i></a>
									</td>
								</tr>
							@endforeach
							</tbody>
            </table>
          </div>
          <!-- /.box-body -->
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
        <h5 class="modal-title">Tipos de Formularios</h5>
      </div>
      <div class="modal-body">

					<a class="btn btn-app">
					 <i class="fa fa-file-pdf-o"></i>DDCA
					</a>

					<a class="btn btn-app">
						<i class="fa fa-file-pdf-o"></i>DRRHH
					</a>


					<a class="btn btn-app">
				    <i class="fa fa-file-pdf-o"></i>FPV
				  </a>

					<a class="btn btn-app">
				    <i class="fa fa-file-pdf-o"></i>Ingenieria
				  </a>

      </div>
    </div>

  </div>
</div>

@endsection
