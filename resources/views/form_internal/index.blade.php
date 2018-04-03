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
									</td>
									<td>
										<div id="pdfs" class="input-group-btn">
                  		<a type="button" class="btn bg-orange btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-print"></i></a>
                  		<ul class="dropdown-menu">
												<li> <a>Seleccione Formularios</a> </li>
												<li class="divider"></li>
                    		<li><a href="{{route('formin/ddca', $form->id)}}" target="_blank"><i class="fa fa-file-pdf-o"></i> DDCA</a></li>
                    		<li><a href="{{route('formin/drrhh', $form->id)}}" target="_blank"><i class="fa fa-file-pdf-o"></i> RRHH</a></li>
                    		<li><a href="{{route('formin/facultad', $form->id)}}" target="_blank"><i class="fa fa-file-pdf-o"></i> Facultad</a></li>
												<li><a href="{{route('formin/fpv', $form->id)}}" target="_blank"><i class="fa fa-file-pdf-o"></i> FPV</a></li>
                  		</ul>
											<a class="btn btn-primary btn-xs" href="" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-edit"></i></a>
											<a class="btn btn-success btn-xs" href="{{ route('formin/drrhh', $form->id) }}" data-toggle="tooltip" data-placement="top" title="Reciclar datos"><i class="fa fa-recycle"></i></a>

                		</div>
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

@endsection
