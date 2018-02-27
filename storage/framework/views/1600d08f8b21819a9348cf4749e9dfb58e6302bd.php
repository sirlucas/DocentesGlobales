<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <small><i class="fa fa-circle text-success"></i> <?php echo e(Auth::user()->email); ?></small>
                </div>
            </div>
        <?php endif; ?>
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-home'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            <li class="header"><?php echo e(trans('adminlte_lang::message.forms')); ?></li>
            <li class=""><a href="<?php echo e(url('formin')); ?>"><i class='fa fa-pencil'></i> <span><?php echo e(trans('adminlte_lang::message.forminterno')); ?></span></a></li>
            <li class=""><a href="<?php echo e(url('formex')); ?>"><i class='fa fa-pencil'></i> <span><?php echo e(trans('adminlte_lang::message.formexterno')); ?></span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
