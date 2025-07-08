
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css\login.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width:25rem">
                <div class="mt-4 mb-2">
                    <img class="mx-auto d-block" src="<?php echo e(asset('assets\images\logo.jpg')); ?>" alt="logo" width="60">
                </div>
                <div class="mt-2 mb-2">
                    <h5 class="card-title text-center">Login</h5>
                </div>
                <div class="mt-2 mb-2">
                    <p class="card-title text-center">Kindly Provide your Login Credentials</p>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('signup.create')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3">                           
                            <button type="submit" class="btn btn-primary mb-3" >Login</button>
                            
                        </div>
                        <div class="mb-3">                           
                            <p class="card-title ">Don't have an account? <a href="<?php echo e(route('signup')); ?>" style="text-decoration:none">Click to Signup</a></p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.baseview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelBookingms\bookingms\resources\views/auth/login.blade.php ENDPATH**/ ?>