<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.externo')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - EXTERNAL'); ?>

<?php $__env->startSection('contentheader_description','Formulario de Visita internacional - Externo'); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
        <div class="box box-orange">
					<div class="box-body">
						<div class="error-content">
		            <h3><i class="fa fa-warning text-yellow"></i> Oops! <?php echo e(trans('adminlte_lang::message.mantenimiento')); ?>.</h3>
		            <p>
		                <?php echo e(trans('adminlte_lang::message.notfindpage')); ?>

		                <?php echo e(trans('adminlte_lang::message.mainwhile')); ?> <a href='<?php echo e(url('/home')); ?>'><?php echo e(trans('adminlte_lang::message.gohome')); ?>.</a>
		            </p>
		        </div><!-- /.error-content -->
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>