<?php $__env->startSection('pageheader'); ?>
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> New User Profile | Account
        <small></small>
    </h1>
    <!-- END PAGE HEADER-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?php echo e(URL::asset('storage/DPs/'.auth()->user()->dp_image )); ?>" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> <?php echo e($model->name); ?> </div>
                    <div class="profile-usertitle-job"> <?php echo e($model->user_type->name); ?> </div>
                    <br />
                    <br />
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" placeholder="Last Name" class="form-control" value="<?php echo e($model->lastname); ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Other Names</label>
                                            <input type="text" placeholder="OtherNames" class="form-control" value="<?php echo e($model->othernames); ?>" readonly /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Mobile Number</label>
                                            <input type="text" placeholder="Phone" class="form-control" value="<?php echo e($model->phone); ?>" readonly /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" placeholder="Email" class="form-control" value="<?php echo e($model->email); ?>" readonly /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" placeholder="Username" class="form-control" value="<?php echo e($model->username); ?>" readonly /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" placeholder=" Address" readonly><?php echo e($model->address); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">User Type</label>
                                            <input type="text" placeholder=" User Type" class="form-control" value="<?php echo e($model->user_type->name); ?>" readonly /> </div>
                                        <div class="margiv-top-10">
                                            <a href="<?php echo e(URL('/admin/users/'. $model->id .'/edit')); ?>" class="btn green"> Edit Profile </a>
                                            
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagestyle'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo e(URL::asset('admin/assets/pages/css/profile.min.css')); ?>" rel="stylesheet" type="text/css" />
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/admin/users/profile.blade.php ENDPATH**/ ?>