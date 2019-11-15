<?php $__env->startSection('pageheader'); ?>
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> School Management
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
                <i class="icon-user"></i>
                <a href="<?php echo e(URL('/admin/schools')); ?>">Schools</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit School</span>
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
                            <i class="icon-user"></i> Something else here</a>
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
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_2" data-toggle="tab"> Edit School </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>School Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo Form::open(['action' => ['SchoolController@update', $model->id], 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']); ?>

                                <div class="form-body">
                                    
                                    <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('name', 'Name', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('name', $model->name, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Name']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('name');; ?> </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <?php echo Form::label('code', 'code', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('code', $model->code, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Code']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('code');; ?> </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <?php echo Form::label('description', 'Description', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::textarea('description', $model->description, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Description']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('description');; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-8">
                                            <div class="row">
                                                <div class="text-right">
                                                    <?php echo Form::submit('Save', ['class'=>'btn green']); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagestyle'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageplugin'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescript'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/admin/schools/edit.blade.php ENDPATH**/ ?>