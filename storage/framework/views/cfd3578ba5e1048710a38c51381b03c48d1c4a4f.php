<!DOCTYPE html>
<html lang="en">

<?php $__env->startSection('htmlheader'); ?>
    <?php echo $__env->make('adminlte::layouts.partials.htmlheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>

<body class="skin-blue-light sidebar-mini">
  <div id="app" v-cloak>
    <div class="wrapper">
      <?php echo $__env->make('adminlte::layouts.partials.mainheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->make('adminlte::layouts.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="content-wrapper">

        <?php echo $__env->make('adminlte::layouts.partials.contentheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Main content -->
        <section class="content">
            <?php echo $__env->yieldContent('main-content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php echo $__env->make('adminlte::layouts.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div><!-- ./wrapper -->
  </div>

<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('adminlte::layouts.partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
