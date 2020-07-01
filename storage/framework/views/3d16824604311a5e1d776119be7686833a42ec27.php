<?php $__env->startSection('pageheader'); ?>
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Users Management
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
                <a href="<?php echo e(URL('/admin/users')); ?>">Users</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Create User</span>
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
                    <a href="#tab_2" data-toggle="tab"> Create User </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>User Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo Form::open(['action' => 'UsersController@store', 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']); ?>

                                <div class="form-body">
                                    
                                    <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('lastname', 'Last Name', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('lastname', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Last Name']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('lastname');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('othernames', 'Other Names', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('othernames', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Other Names']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('othernames');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('phone', 'Phone', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('phone', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Phone']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('phone');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('email', 'Email', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::email('email', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Email']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('email');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('user_type', 'User Type', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::select('user_type', $user_types, null, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select User Type']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('user_type');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('username', 'Username', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('username', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' UserName']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('username');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('description', 'Address', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::textarea('address', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Description']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('address');; ?> </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <?php echo Form::label('dp_image', 'Display Picture', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::file('dp_image', ['class'=>'form-control']); ?>

                                                    
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

                                                    <?php echo Form::reset('Cancel', ['class'=>'btn default']); ?>

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/admin/users/create.blade.php ENDPATH**/ ?>