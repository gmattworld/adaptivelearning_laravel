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
                <a href="<?php echo e(URL('/admin/posts')); ?>">Posts</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Post</span>
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
                    <a href="#tab_2" data-toggle="tab"> Edit Post </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Post Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php echo Form::open(['action' => ['PostController@update', $model->id], 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']); ?>

                                <div class="form-body">
                                    
                                    <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('topic', 'Topic', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('topic', $model->topic, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Topic']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('topic');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('category_id', 'Category', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::select('category_id', $categories, $model->category->id, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select Category']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('category_id');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('keywords', 'Key Words', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::text('keywords', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Key Words']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('keywords');; ?> </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo Form::label('cover_img', 'Cover Image', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::file('cover_img', ['class'=>'form-control']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('cover_img');; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo Form::label('brief', 'Brief', ['class'=>'control-label col-md-3']); ?>

                                                <div class="col-md-9">
                                                    <?php echo Form::textarea('brief', $model->brief, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Brief']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('brief');; ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo Form::label('body', 'Body', ['class'=>'col-md-12']); ?>

                                                <div class="col-md-12">
                                                    <?php echo Form::textarea('body', $model->body, ['class'=>'form-control', 'required'=>'required', 'id'=>'article-ckeditor', 'placeholder'=>' Body']); ?>

                                                    <span class="text-danger"> <?php echo $errors->first('body');; ?> </span>
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescript'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
<!-- END PAGE LEVEL SCRIPTS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>