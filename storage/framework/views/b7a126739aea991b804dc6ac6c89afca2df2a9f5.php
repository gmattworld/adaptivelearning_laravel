<?php $__env->startSection('pageheader'); ?>
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Resources Management
        <small></small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="<?php echo e(URL('/admin/dashboard')); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Resources</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-archive"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- BEGIN DASHBOARD STATS 1-->
<div>
    <div>
        <?php echo Form::open(['action' => 'ResourceController@filter', 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']); ?>

            <div class="form-body">
                
                <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <?php echo Form::label('level_id', 'Level', ['class'=>'control-label col-md-3']); ?>

                            <div class="col-md-9">
                                <?php echo Form::select('level_id', $levels, $selectedlevel, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' All']); ?>

                                <span class="text-danger"> <?php echo $errors->first('level_id');; ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <?php echo Form::submit('Filter', ['class'=>'btn green']); ?>

                    
                        <a href="<?php echo e(URL('/admin/resources')); ?>" class="btn default">Reset</a>
                    </div>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div>
</div>
<div class="row">
    <?php if(count($model) > 0): ?>
        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="<?php echo e(URL('/admin/resources/'. $item->id)); ?>">
                    <div class="visual">
                        <i class="fa fa-archive"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span><?php echo $item->name; ?></span>
                        </div>
                        <div class="desc"> <?php echo $item->subject; ?> </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h1>No Courses created yet</h1>
    <?php endif; ?>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagestyle'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo e(URL::asset('admin/assets/global/plugins/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageplugin'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(URL::asset('admin/assets/global/scripts/datatable.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('admin/assets/global/plugins/datatables/datatables.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescript'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(URL::asset('admin/assets/pages/scripts/table-datatables-managed.min.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/student/cresources/index.blade.php ENDPATH**/ ?>