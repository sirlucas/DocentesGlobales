<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="box box-orange">
					<div class="box-body">
						<!-- box internos -->
						<div class="col-md-6">
							<div class="">
								<div class="box-header with-border">
										<h4 class="box-title">Docentes y Administrativos Internos</h4>
								</div>
								<!-- box body -->
								<div class="box-body">
									<p>Si eres docente o administrativo de la UDD y vas a visitar una universidad extranjera,
									por favor completa el formulario: <b><?php echo e(trans('adminlte_lang::message.interno')); ?></b>
									ingresando a través del menú principal.</p>
								</div>
								<!-- /.box-body -->
							</div>
						</div>
						<!-- /.box internos -->

						<!-- box externos -->
						<div class="col-md-6">
							<div class="">
								<div class="box-header with-border">
										<h4 class="box-title">Docentes y Administrativos Externos</h4>
								</div>
								<!-- box body -->
								<div class="box-body">
									<p>Si eres docente o administrativo de una universidad extranjera
										y vas a visitar la UDD, por favor completa el formulario:
										<b><?php echo e(trans('adminlte_lang::message.interno')); ?></b> ingresando a través
										del menú principal.</p>
								</div>
								<!-- /.box-body -->
							</div>
						</div>
						<!-- /.box externos -->
					</div>
						<!-- /.box-body -->
				</div>
			</div>

		</div>
	</div>


	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>