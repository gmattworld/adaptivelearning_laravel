<?php $__env->startSection('pageheader'); ?>
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Posts Management
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
                <i class="icon-post"></i>
                <a href="<?php echo e(URL('/admin/posts')); ?>"> Posts</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Post Details</span>
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
                            <i class="icon-post"></i> Something else here</a>
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
                    <a href="#tab_3" data-toggle="tab"> Post Details </a>
                </li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="tab_3">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i><?php echo e($model->topic); ?> Post Info.</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('topic', 'Topic', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('topic', $model->topic, ['class'=>'form-control', 'readonly'=>'readonly']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('topic');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('category', 'Category', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('category', $model->category->name, ['class'=>'form-control', 'readonly'=>'readonly']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('category');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('keywords', 'Key Words', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('keywords', $model->keywords, ['class'=>'form-control', 'readonly'=>'readonly']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('keywords');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('is_active', 'Status', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('is_active', $model->is_active ? 'Active' : 'Disabled', ['class'=>'form-control', 'readonly'=>'readonly']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('is_active');; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('brief', 'Brief', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::textarea('brief', $model->brief, ['class'=>'form-control', 'readonly'=>'readonly']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('brief');; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Body</p>
                                            <div class="well">
                                                <?php echo $model->body; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-8">
                                            <div class="row">
                                                <div class="text-right">
                                                    <a href="<?php echo e(URL('/admin/posts/'. $model->id .'/status')); ?>" class="btn <?php echo e($model->is_active ? 'red' : 'green'); ?>"><?php echo e($model->is_active ? 'Disable' : 'Enable'); ?></a>
                                                    <a href="<?php echo e(URL('/admin/posts/'. $model->id .'/edit')); ?>" class="btn blue">Edit</a>
                                                    <a href="<?php echo e(URL('/admin/posts/')); ?>" class="btn default">Return to list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/admin/posts/details.blade.php ENDPATH**/ ?>