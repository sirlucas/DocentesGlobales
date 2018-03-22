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
										<a class="btn btn-info btn-xs" href="{{ route('formin.edit',$form->id) }}"><i class="fa fa-file-pdf-o"></i></a>
										<a class="btn btn-info btn-xs" href="{{ route('formin.edit',$form->id) }}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-info btn-xs" href="{{ route('formin.edit',$form->id) }}"><i class="fa fa-recycle"></i></a>

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

@endsection
