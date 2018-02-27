<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.interno')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL'); ?>

<?php $__env->startSection('contentheader_description','Formulario de Visita internacional - Interno'); ?>

<?php $__env->startSection('main-content'); ?>
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
						<a href="#" class="btn btn-app">
							<i class="fa fa-plus"></i>
							<?php echo e(trans('adminlte_lang::message.newform')); ?>

						</a>
						<a href="#" class="btn btn-app">
							<i class="fa fa-edit"></i>
							<?php echo e(trans('adminlte_lang::message.editform')); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>