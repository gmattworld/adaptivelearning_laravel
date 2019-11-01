<?php $__env->startSection('content'); ?>
<div class="login-content">
    <h1 class="text-center"><strong><?php echo e(config('utility.org_name', '')); ?></strong></h1>
    <h3 class="text-center"><strong>User Authorization</strong></h3>
    <form method="POST" action="<?php echo e(route('login')); ?>" class="login-form">
            <?php echo csrf_field(); ?>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Enter any username and password. </span>
            </div>
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            </div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            </div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            <div class="form-group row">

                <div class="col-md-6">
                    <input id="email" type="email" placeholder=" Email" class="form-control form-control-solid placeholder-no-fix form-group <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off" autofocus>


                </div>

                <div class="col-md-6">
                    <input id="password" placeholder=" Password" type="password" class="form-control form-control-solid placeholder-no-fix form-group <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="off">


                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                        <label class="form-check-label" for="remember">
                            <?php echo e(__('Remember Me')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-right">
                <?php if(Route::has('password.request')): ?>
                    <div class="forgot-password">
                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                    </div>
                <?php endif; ?>
                <button type="submit" class="btn green">
                    <?php echo e(__('Login')); ?>

                </button>
            </div>
        </form>
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form method="POST" action="<?php echo e(route('password.email')); ?>" class="forget-form">
        <?php echo csrf_field(); ?>
        <h3 class="font-green">Forgot Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input id="email" type="email" placeholder=" Email Address" class="form-control placeholder-no-fix form-group <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off" autofocus>

            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">
                <?php echo e(__('Send Password Reset Link')); ?>

            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/auth/login.blade.php ENDPATH**/ ?>